<?php

namespace App\Http\Controllers;
use App\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
	public function editFeature(){
		$data = Feature::first();
        return view('backend.config.edit_feature', compact('data'));
	}
    public function saveFeature(Request $request){
        $feature=Feature::first();
        if ($feature) {
            $feature->update([
                'feature_header' => $request->featureHeader,
                'feature_text' => $request->featureText,
            ]);

            return redirect('/feature/edit')->withMessage('Site information updated.');
        }
        Feature::create([
            'feature_header' => $request->featureHeader,
            'feature_text' => $request->featureText,
        ]);
        return redirect('/feature/edit')->withMessage('Site information updated.');
    }


//Frontend
     public function feature(){
     	$feature=Feature::first();
        return view('frontend.about.features', compact('feature'));
    }

}
