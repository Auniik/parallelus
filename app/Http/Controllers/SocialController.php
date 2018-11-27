<?php

namespace App\Http\Controllers;
use App\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function addSocial(){
    	return view('backend.socials.add_social');
    }
    public function saveSocial(Request $request){
        $validatedData = $request->validate([
            'socialName' => 'required|min:3',
            'socialLink' => 'required|max:100|min:5',
        ]);
    	Social::create([
    		'social_name' => $request->socialName,
    		'social_link' => $request->socialLink,
    	]);
   		return redirect('/social/add')->withMessage('Social Link Added Successfully');
    }

    public function allSocial(){
    	$socials=Social::get();
    	return view('backend.socials.all_social', compact('socials'));
    }
    public function deleteSocial($id){
    	$data=Social::findOrFail($id);
    	$data->delete();
    	return redirect('/social/all')->withMessage('Social Link Deleted');
    }
}
