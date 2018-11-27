<?php

namespace App\Http\Controllers;
use App\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
	public function sendNewsletter(Request $request){
		$validatedData = $request->validate([
            'userEmail' => 'required|email|max:50',
            'userZip' => 'required|max:20',
        ]);
		Newsletter::create([
			'user_email' => $request->userEmail,
			'user_zip' => $request->userZip,
		]);
		return redirect('/')->withMessage('We\'ll notify you soon');
	}
	public function newsletters(){
		$newsletters=Newsletter::get();
		return view ('backend.newsletters', compact('newsletters'));
	}
	public function deleteNewsletter($id)
	{
		$data=Newsletter::findOrFail($id);
		$data->delete();
		return redirect('/admin')->withMessage('Newsletter Deleted');
	}

	//frontend
	public function newsletter(){
		return view('frontend.newsletter');
	}
}
