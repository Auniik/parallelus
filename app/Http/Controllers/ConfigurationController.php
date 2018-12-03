<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Configuration;
use Session;
use App\BackgroundConfig;

class ConfigurationController extends Controller
{
    
    public function editConfig()
    {
        $configRecord = Configuration::first();

        if ($configRecord){
            return $this->edit($configRecord);
        }

        return $this->create();
    }

    public function create()
    {
        return view('backend.config.add_config');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'profileName' => 'required|max:50',
            'designation' => 'required|max:50',
            'quoteMessage' => 'required|max:255',
            'designation' => 'required|max:50',
            'address' => 'required|max:70',
            'bgImage' => 'required|mimes:jpeg,bmp,jpg,png',
            'favicon' => 'required|mimes:ico,png',
        ]);

        Configuration::create([
            'profile_name' => $request->profileName,
            'designation' => $request->designation,
            'quote_message' => $request->quoteMessage,
            'address' => $request->address,
            'bg_image' => $request->bgImage->storeAs('/uploads/images/home','header-home.jpg'),
            'favicon' => $request->favicon->storeAs('/uploads/favicon','favicon.ico'),
        ]);
        return redirect('/settings')->withMessage('Site information updated.');
    }


    public function edit($configRecord)
    {
        return view('backend.config.edit_config', compact('configRecord'));
    }



    public function updateConfig(Request $request){
        $validatedData = $request->validate([
            'profileName' => 'required|max:50',
            'designation' => 'required|max:50',
            'quoteMessage' => 'required|max:255',
            'designation' => 'required|max:50',
            'address' => 'required|max:70',
            'bgImage' => 'required|mimes:jpeg,bmp,jpg,png',
            'favicon' => 'required|mimes:ico,png',
        ]);
        $config=Configuration::first();
        $config->update([
                'profile_name' => $request->profileName,
                'designation' => $request->designation,
                'quote_message' => $request->quoteMessage,
                'address' => $request->address,
            ]);
        $isExist=$request->file('bgImage');
        $isExistIcon=$request->file('favicon');
        if ($isExist) {
            $request->bgImage->storeAs('/', $config->bg_image);        
        }
        if ($isExistIcon) {
            $request->favicon->storeAs('/', $config->favicon);
        } 
        
        return redirect('/settings')->withMessage('Site information updated.');
    }



    //Background Theme
    public function editBackground(){
        return view('backend.config.edit_background');
    }
    public function updateBackground(Request $request)
    {
        $validatedData = $request->validate([
            'bgImage' => 'required|mimes:jpeg,bmp,jpg,png',
        ]);
        $config = BackgroundConfig::first();
        if ($config) {
            $request->bgImage->storeAs('/', $config->bg_image);
            return redirect('/background')->withMessage('Site information updated.');
        }
        BackgroundConfig::create([
            'bg_image' => $request->bgImage->storeAs('/uploads/images/background', 'background.jpg'),
        ]);
        return redirect('/background')->withMessage('Site information updated.');

    }

}
