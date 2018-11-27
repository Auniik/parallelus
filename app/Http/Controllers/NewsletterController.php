<?php

namespace App\Http\Controllers;
use App\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
	public function sendNewsletter(Request $request){
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
	public function delete_newsletter($id)
	{
		$data=Newsletter::findOrFail($id);
		$data->delete();
		return redirect('/admin')->withMessage('Newsletter Deleted');
	}
}
