<?php

namespace App\Http\Controllers;
use App\Issues;
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
            'issueImage' => 'required',
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


    //Frontend-------------------------------------------

    public function issues(){
        $data=Issues::orderBy('created_at', 'desc')->paginate(5);
        return view('frontend.issues.issues', compact('data'));
    }

    public function issue($id){
        $data=Issues::findOrFail($id);
        return view('frontend.issues.issue', compact('data'));
    }



    
}
