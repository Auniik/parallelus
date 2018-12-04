<?php

namespace App\Http\Controllers;
use App\Contact;
use App\ContactConfig;
use Illuminate\Http\Request;

class ContactController extends Controller
{
	
	
    public function sendMessage(Request $request){
    	$request->validate([
            'firstName' => 'required|max:30',
            'lastName' => 'required|max:30',
            'email' => 'required|email|max:50',
            'zip' => 'required|max:15',
            'mobileNumber' => 'required|max:70',
            'comments' => 'required',
        ]);
		Contact::create([
			'first_name' => $request->firstName,
			'last_name' => $request->lastName,
			'email' => $request->email,
			'zip' => $request->zip,
			'mobile_number' => $request->mobileNumber,
			'comments' => $request->comments,
		]);
		return redirect('/contact')->withMessage('We\'ll notify you soon');
	}

	//Backend
	public function messages(){
		$messages=Contact::orderBy('created_at','desc')->paginate(10);
		return view ('backend.contacts.contacts', compact('messages'));
	}
	public function deleteMessage($id)
	{
		$data=Contact::findOrFail($id);
		$data->delete();
		return redirect('/admin')->withMessage('Contact Deleted');
	}




	//CONFIGURATION---------------------------------------------------

	public function contactAppearance()
    {
        $config = ContactConfig::first();
        return view('backend.contacts.contact_config', compact('config'));
    }

    public function updateContactConfig(Request $request)
    {
    	$validateContact = $request->validate([
            'pageHeading' => 'required|max:30',
            'description' => 'required|max:50',
        ]);
    	$config = ContactConfig::first();
        if ($config) {
            $config->update([
                'page_heading' => $request->pageHeading,
                'description' => $request->description,
            ]);
            return redirect('/contact/appearance')->withMessage('Site information updated.');
        }
        ContactConfig::create([
            'page_heading' => $request->pageHeading,
            'description' => $request->description,
        ]);
        return redirect('/contact/appearance')->withMessage('Site information updated.');

    }

    //Frontend
    public function index(){
        $config=ContactConfig::first();
        return view('frontend.contact.contact_page', compact('config'));
    }
}
