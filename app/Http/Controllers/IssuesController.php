<?php

namespace App\Http\Controllers;
use App\Issues;
use App\BackgroundConfig;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class IssuesController extends Controller
{

    //ISSUE CRUD----------------------------------
    public function addIssue(){
    	return view('backend.issues.add_issue');
    }

    public function saveIssue(Request $request){
    	$request->validate([
            'issueHeading' => 'required',
            'issueDescription' => 'required',
            'issueImage' => 'required',
        ]); 
        Issues::create([
    		'issue_heading' => $request->issueHeading,
            'issue_description' => $request->issueDescription,
            'publication_status' => $request->publicationStatus,
    		'issue_image' => $request->issueImage->store('/uploads/images/issues'),
    	]);
   		return redirect('/issue/add')->withMessage('Issue Added Successfully');
    }

    public function allIssue(){
    	$issues=Issues::orderBy('created_at','desc')->paginate(10);
    	return view('backend.issues.all_issue', compact('issues'));
    }

    public function viewIssue(Issues $id){
        $data=$id;
        return view('backend.issues.view_issue', compact('data'));
    }

    public function deleteIssue(Issues $id)
	{
        $id->delete();
        $image = $id->issue_image;
        Storage::delete($image);
		return redirect('/issue/all')->withMessage('Issue Deleted');
	}
	public function editIssue($id){
		$issue=Issues::findOrFail($id);
		return view('/backend.issues.edit_issue', compact('issue'));
	}
	public function updateIssue(Request $request, $id){
        $request->validate([
            'issueHeading' => 'required',
            'issueDescription' => 'required',
            'issueImage' => 'mimes:jpeg,bmp,jpg,png',
        ]); 
		$data=Issues::findOrFail($id);
        $image=$data->issue_image;
        $isExist=$request->file('issueImage');
        $data->update([
            'issue_heading'=>$request->issueHeading,
            'issue_description'=>$request->issueDescription,
        ]);
        if ($isExist) {
            $request->issueImage->storeAs('/', $image);
        }
		return redirect('/issue/all')->withMessage('Issue updated successfully');
	}

    //Publication Status
    public function activeIssue(Issues $id){
        $id->update([
            'publication_status' => 1,
        ]);
       return redirect('/issue/all')->withMessage('Issue Published.');
    }


    public function inactiveIssue(Issues $id){
        $id->update([
            'publication_status' => 0,
        ]);
        return redirect('/issue/all')->withMessage('Issue Unpublished.');
    }


    //Frontend-------------------------------------------

    public function issues(){
        $data=Issues::where('publication_status',1)->orderBy('created_at', 'desc')->paginate(5);
        $config=BackgroundConfig::first();
        return view('frontend.issues.issues', compact('data', 'config'));
    }

    public function issue($id){
        $data=Issues::findOrFail($id);
        return view('frontend.issues.issue', compact('data'));
    }



    
}
