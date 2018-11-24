<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
	public function index(){
		return view('frontend.contact.contact_page');
	}
    public function sendMessage(Request $request){
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
	public function messages(){
		$data=Contact::get();
		return view ('backend.contacts.contacts', compact('data'));
	}
	public function deleteMessage($id)
	{
		$data=Contact::findOrFail($id);
		$data->delete();
		return redirect('/admin')->withMessage('Contact Deleted');
	}
}
