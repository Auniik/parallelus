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
        $validatedData = $request->validate([
            'newsHeading' => 'required|max:160',
            'newsDescription' => 'required|min:160',
        ]);
    	News::create([
    		'news_heading' => $request->newsHeading,
    		'description' => $request->newsDescription,
    	]);
   		return redirect('/news/add')->withMessage('News Added Successfully');
    }

    public function allNews(){
    	$news=News::orderBy('created_at', 'asc')->paginate(10);
    	return view('backend.news.all_news', compact('news'));
    }

    public function deleteNews($id)
	{
		$data=News::findOrFail($id);
		$data->delete();
		return redirect('/news/all')->withMessage('News Deleted');
	}
	public function editNews($id){
		$article=News::findOrFail($id);
		return view('/backend.news.edit_news', compact('article'));
	}
	public function updateNews(Request $request, $id){
		$info=News::findOrFail($id);
        // $input = $request->all();
        $info->update([
        	'news_heading'=>$request->newsHeading,
        	'description'=>$request->newsDescription,
        ]);
        // $info->update($input);
		return redirect('/news/all')->withMessage('News updated successfully');
	}

    //Frontend
    public function newslist(){
        $data=News::orderBy('created_at', 'desc')->paginate(5);
        return view('frontend.news.news', compact('data'));
    }

    public function showNews($id){
        $data=News::findOrFail($id);
        return view('frontend.news.article', compact('data'));
    }
}
