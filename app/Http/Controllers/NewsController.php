<?php

namespace App\Http\Controllers;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function addNews(){
    	return view('backend.news.add_news');
    }
    public function saveNews(Request $request){
    	News::create([
    		'news_heading' => $request->newsHeading,
    		'description' => $request->newsDescription,
    	]);
   		return redirect('/add-news')->withMessage('Issue Added Successfully');
    }

    public function allNews(){
    	$data=News::get();
    	return view('backend.news.all_news', compact('data'));
    }

    public function deleteNews($id)
	{
		$data=News::findOrFail($id);
		$data->delete();
		return redirect('/all-news')->withMessage('Issue Deleted');
	}
	public function editNews($id){
		$data=News::findOrFail($id);
		return view('/backend.news.edit_news', compact('data'));
	}
	public function updateNews(Request $request, $id){
		$info=News::findOrFail($id);
        // $input = $request->all();
        $info->update([
        	'news_heading'=>$request->newsHeading,
        	'description'=>$request->newsDescription,
        ]);
        // $info->update($input);
		return redirect('/all-news')->withMessage('Issue updated successfully');
	}

    //Frontend
    public function newslist(){
        $data=News::get();
        return view('frontend.news.newslist', compact('data'));
    }

    public function showNews($id){
        $data=News::findOrFail($id);
        return view('frontend.news.news', compact('data'));
    }
}
