<?php

namespace App\Http\Controllers;
use App\Slider;
use App\Event;
use App\News;
use App\Video;
use App\Configuration;
use App\About;
use App\Social;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    //FRONTEND
    public function index(){
        $published_sliders=Slider::where('publication_status', 1)->get();
        $events=Event::where('publication_status', 1)->orderBy('event_date', 'desc')->limit(3)->get();
        $data=News::where('publication_status', 1)->orderBy('created_at', 'desc')->limit(3)->get();
        $videos=Video::where('publication_status', 1)->orderBy('created_at', 'desc')->limit(4)->get();

        $config=Configuration::first();
		$about=About::first();

		

        return view('frontend.home.home', compact('config', 'about', 'videos','data','published_sliders', 'events'));
    }
}
