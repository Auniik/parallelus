<?php

namespace App\Http\Controllers;
use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function videos(){
    	return view('frontend.videos.videos');
    }

    public function addVideo(Request $request){
    	return view('backend.videos.add_video');
    }

    public function saveVideo(Request $request){
    	$videoLink= $request->videoLink;
    	preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $videoLink, $matches);
		$videoId=$matches[1];
    	Video::create([
    		'video_title' => $request->videoTitle,
    		'short_description' => $request->shortDescription,
    		'video_url' => $videoId,
    	]);
   		return redirect('/add-video')->withMessage('Video Link Added Successfully');
    }
    public function allVideo(){
    	$data=Video::paginate();
    	return view('backend.videos.all_video', compact('data'));
    }
    public function deleteVideo($id){
    	$data=Video::findOrFail($id);
    	$data->delete();
    	return redirect('/all-video')->withMessage('Video Link Deleted');
    }
}
