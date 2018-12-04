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
            'socialName' => 'required',
            'socialLink' => 'required|max:100|min:5',
        ]);
    	Social::create([
    		'social_name' => $request->socialName,
    		'social_link' => $request->socialLink,
            'publication_status' => $request->publicationStatus,
    	]);
   		return redirect('/social/add')->withMessage('Social Link Added Successfully');
    }

    public function allSocial(){
    	$socials=Social::orderBy('created_at', 'desc')->paginate(10);
    	return view('backend.socials.all_social', compact('socials'));
    }
    public function deleteSocial($id){
    	$data=Social::findOrFail($id);
    	$data->delete();
    	return redirect('/social/all')->withMessage('Social Link Deleted');
    }
    //Publication Status
    public function activeSocial(Social $id){
        $id->update([
            'publication_status' => 1,
        ]);
       return redirect('/social/all')->withMessage('Social link Published.');
    }


    public function inactiveSocial(Social $id){
        $id->update([
            'publication_status' => 0,
        ]);
        return redirect('/social/all')->withMessage('Social link Unpublished.');
    }
}
