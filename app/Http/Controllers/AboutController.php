<?php

namespace App\Http\Controllers;
use App\About;
use App\AboutConfig;
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

    

    //ABOUT CONFIG

    /**
     * @param Request $request
     * @return mixed
     */
    public function updateAboutBg(Request $request)
    {
        $validatedData = $request->validate([
            'bgImage' => 'required|mimes:jpeg,bmp,jpg,png',
        ]);
        $config = AboutConfig::first();
        if ($config) {
            $request->bgImage->storeAs('/', $config->bg_image);
            return redirect('/about/edit')->withMessage('Site information updated.');
        }
        AboutConfig::create([
            'bg_image' => $request->bgImage->storeAs('/uploads/images/about', 'about-background.jpg'),
        ]);
        return redirect('/about/edit')->withMessage('Site information updated.');

    }

    //FROENT END
    public function about(){
        return view('frontend.about.about');
    }

}
