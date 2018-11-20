<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Configuration;
use Session;
session_start();

class ConfigurationController extends Controller
{
    
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
            return redirect('/edit-config')->withMessage('Site information updated.');
        }
        Configuration::create([
            'profile_name' => $request->profileName,
            'designation' => $request->designation,
            'quote_message' => $request->quoteMessage,
            'address' => $request->address,
            'bg_image' => $request->bgImage->store('/'),
        ]);
        return redirect('/edit-config')->withMessage('Site information updated.');

    }

    public function editConfig()
    {
        $configs = Configuration::first();
        return view('backend.config.editConfig', compact('configs'));
    }
}
