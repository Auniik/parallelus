<?php

namespace App\Http\Controllers;
use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{

	public function editabout(){
		$about = About::first();
        return view('backend.config.editabout', compact('about'));
	}
	public function saveAbout(Request $request){
	    $about=About::first();
        if ($about) {
            $about->update([
                'about_heading' => $request->aboutHeading,
                'about_text' => $request->aboutText,
            ]);
            // $request->bgImage->storeAs('/uploads/images', $about->bg_image);
            return redirect('/edit-about')->withMessage('Site information updated.');
        }
        About::create([
            'about_heading' => $request->aboutHeading,
            'about_text' => $request->aboutText,
            // 'bg_image' => $request->bgImage->store('/uploads/images'),
        ]);
        return redirect('/edit-about')->withMessage('Site information updated.');
    }

    public function about(){
        return view('frontend.about.about');
    }
}
