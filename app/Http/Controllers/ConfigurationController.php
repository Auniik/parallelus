<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Configuration;

class ConfigurationController extends Controller
{
    public function index()
    {
    	return view('backend.config.addConfig');
    }

    public function saveConfig(Request $request)
    {

    	$config = Configuration::first();
        if ($config) {
            $config->update([
                'profile_name' => $request['profileName'],
                'designation' => $request['designation'],
                'quote_message' => $request['quoteMessage']
            ])->where('id',$id);
            return Redirect('/view-config');
        }

    	Configuration::create([
            'profile_name' => $request['profileName'],
            'designation' => $request['designation'],
            'quote_message' => $request['quoteMessage']
        ]);
        return Redirect('/view-config');
    }
    public function viewConfig()
    {
        $configs = Configuration::first();
        return view('backend.config.viewConfig',compact('configs'));
    }

    public function editConfig()
    {
        $configs = Configuration::first();
        return view('backend.config.editConfig', compact('configs',$configs));
    }

    public function updateConfig(Request $request)
    {
        $id=$request->id;
        $config = Configuration::first();
        if ($config) {
            $config->where('id',$id)->update([
                'profile_name' => $request['profileName'],
                'designation' => $request['designation'],
                'quote_message' => $request['quoteMessage']
            ])->where('id',$id);
            return Redirect('/view-config');
        }
    }
}
