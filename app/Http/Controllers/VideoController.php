<?php

namespace App\Http\Controllers;
use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function videos(){
        $data=Video::paginate(9);
    	return view('frontend.videos.videos', compact('data'));
    }

    public function addVideo(Request $request){
    	return view('backend.videos.add_video');
    }

    public function saveVideo(Request $request){
        $validatedData = $request->validate([
            'videoTitle' => 'required',
            'shortDescription' => 'required|max:160',
            'videoLink' => 'required',
        ]);
        $videoLink= $request->videoLink;
        preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $videoLink, $matches);
        if ($matches) {
            $videoId=$matches[1];
            Video::create([
            'video_title' => $request->videoTitle,
            'short_description' => $request->shortDescription,
            'video_url' => $videoId,
        ]);
        return redirect('/video/add')->withMessage('Video Link Added Successfully');
        }
        return redirect('/video/add')->withFailed('Video Link is not valid');
        
    }
    public function allVideo(){
    	$videos=Video::paginate(10);
    	return view('backend.videos.all_video', compact('videos'));
    }
    public function deleteVideo($id){
    	$data=Video::findOrFail($id);
    	$data->delete();
    	return redirect('/video/all')->withMessage('Video Link Deleted');
    }
}
