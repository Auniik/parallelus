<?php

namespace App\Http\Controllers;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class NewsController extends Controller
{
    public function addNews(){
    	return view('backend.news.add_news');
    }


    public function saveNews(Request $request){
        $request->validate([
            'newsHeading' => 'required',
            'newsDescription' => 'required',
            'articleImage' => 'required|mimes:jpeg,bmp,jpg,png',

        ]);
    	News::create([
    		'news_heading' => $request->newsHeading,
    		'description' => $request->newsDescription,
            'publication_status' => $request->publicationStatus,
            'article_image' => $request->articleImage->store('/uploads/images/news'),
    	]);
   		return redirect('/news/add')->withMessage('News Added Successfully');
    }


    public function allNews(){
    	$news=News::orderBy('created_at', 'desc')->paginate(10);
    	return view('backend.news.all_news', compact('news'));
    }

    public function viewNews(News $id){
    	$data=$id;
    	return view('backend.news.view_news', compact('data'));
    }

    public function deleteNews(News $id)
	{
        $id->delete();
        $image=$id->article_image;
        Storage::delete($image);
		return redirect('/news/all')->withMessage('News Deleted');
    }
    

	public function editNews($id){
		$article=News::findOrFail($id);
		return view('/backend.news.edit_news', compact('article'));
    }
    

	public function updateNews(Request $request, $id){
        $request->validate([
            'newsHeading' => 'required',
            'newsDescription' => 'required',
            'articleImage' => 'mimes:jpeg,bmp,jpg,png',
        ]);
		$data=News::findOrFail($id);
        $image=$data->article_image;
        $isExist=$request->file('articleImage');
        $data->update([
        	'news_heading'=>$request->newsHeading,
        	'description'=>$request->newsDescription,
        ]);
        if($isExist){
            $request->articleImage->storeAs('/', $image);
        }
		return redirect('/news/all')->withMessage('News updated successfully');
	}

    //Publishing status
    public function activeNews(News $id){
        $id->update([
            'publication_status' => 1,
        ]);
       return redirect('/news/all')->withMessage('News Published.');
    }


    public function inactiveNews(News $id){
        $id->update([
            'publication_status' => 0,
        ]);
        return redirect('/news/all')->withMessage('News Unpublished.');
    }

    
    //Frontend
    public function newslist(){
        $data=News::where('publication_status', 1)->orderBy('created_at', 'desc')->paginate(5);
        return view('frontend.news.news', compact('data'));
    }

    public function showNews($id){
        $data=News::findOrFail($id);
        return view('frontend.news.article', compact('data'));
    }
}
