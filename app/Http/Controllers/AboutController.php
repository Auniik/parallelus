<?php

namespace App\Http\Controllers;
use App\About;
use App\AboutConfig;
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
        ]);
        return redirect('/edit-about')->withMessage('Site information updated.');
    }

    

    //ABOUT CONFIG

    public function updateAboutBg(Request $request)
    {
        $config = AboutConfig::first();
        if ($config) {
            $request->bgImage->storeAs('/', $config->bg_image);
            return redirect('/edit-about')->withMessage('Site information updated.');
        }
        AboutConfig::create([
            'bg_image' => $request->bgImage->storeAs('/uploads/images/about', 'about-background.jpg'),
        ]);
        return redirect('/edit-about')->withMessage('Site information updated.');

    }


    //FROENT END


    public function about(){
        return view('frontend.about.about');
    }

}
