<?php

namespace App\Http\Controllers;
use App\About;
use App\BackgroundConfig;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //Edit About
	public function editAbout(){
		$data = About::first();
        return view('backend.config.edit_about', compact('data'));
	}
	//Save About
	public function saveAbout(Request $request){

        $validatedData = $request->validate([
            'aboutHeading' => 'required|max:100',
            'aboutText' => 'required',
        ]);

	    $about=About::first();
        if ($about) {
            $about->update([
                'about_heading' => $request->aboutHeading,
                'about_text' => $request->aboutText,
            ]);
            return redirect('/about/edit')->withMessage('Site information updated.');
        }
        About::create([
            'about_heading' => $request->aboutHeading,
            'about_text' => $request->aboutText,
        ]);
        return redirect('/about/edit')->withMessage('Site information updated.');
    }

    

    //FROENT END
    public function about(){
        $about=About::first();
        $config=BackgroundConfig::first();
        return view('frontend.about.about', compact('about', 'config'));
    }

}
