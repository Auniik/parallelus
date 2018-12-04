<?php

namespace App\Http\Controllers;
use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{

   

    //CRUD
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
            'publication_status' => $request->publicationStatus,
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

    public function editVideo($id){
        $video=Video::findOrFail($id);
        return view('/backend.videos.edit_video', compact('video'));
    }
    public function updateVideo(Request $request, $id){
            $request->validate([
                'videoTitle' => 'required',
                'shortDescription' => 'required|max:160',
                'videoLink' => 'required',
            ]); 
            $data=Video::findOrFail($id);
            $videoLink= $request->videoLink;
            preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $videoLink, $matches);
            if ($matches) {
                $videoId=$matches[1];
                $data->update([
                    'video_title' => $request->videoTitle,
                    'short_description' => $request->shortDescription,
                    'video_url' => $videoId,
            ]);
            return redirect('/video/all')->withMessage('Video updated successfully');
        }
        return redirect('/video/'.$id.'/edit')->withFailed('Video Link is not valid');
    }

    //PUBLICATION STATUS
    public function activeVideo(Video $id){
        $id->update([
            'publication_status' => 1,
        ]);
       return redirect('/video/all')->withMessage('Video Published.');
    }


    public function inactiveVideo(Video $id){
        $id->update([
            'publication_status' => 0,
        ]);
        return redirect('/video/all')->withMessage('Video Unpublished.');
    }

    //Frontend
    public function videos(){
        $data=Video::where('publication_status', 1)->orderBy('created_at', 'desc')->paginate(9);
        return view('frontend.videos.videos', compact('data'));
    }

}