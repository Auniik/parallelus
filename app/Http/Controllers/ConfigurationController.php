<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Configuration;
use Session;

class ConfigurationController extends Controller
{
    
    public function editConfig()
    {
        $config = Configuration::first();
        return view('backend.config.edit_config', compact('config'));
    }

    public function saveConfig(Request $request)
    {
    	$config = Configuration::first();
        if ($config) {
            $config->update([
                'profile_name' => $request->profileName,
                'designation' => $request->designation,
                'quote_message' => $request->quoteMessage,
                'address' => $request->address,
            ]);
            $request->bgImage->storeAs('/', $config->bg_image);
            $request->favicon->storeAs('/', $config->favicon);
            return redirect('/settings')->withMessage('Site information updated.');
        }
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

}
