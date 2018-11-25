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
    	Social::create([
    		'social_name' => $request->socialName,
    		'social_link' => $request->socialLink,
    	]);
   		return redirect('/add-social')->withMessage('Social Link Added Successfully');
    }

    public function allSocial(){
    	$data=Social::get();
    	return view('backend.socials.all_social', compact('data'));
    }
    public function deleteSocial($id){
    	$data=Social::findOrFail($id);
    	$data->delete();
    	return redirect('/all-social')->withMessage('Social Link Deleted');
    }
}
