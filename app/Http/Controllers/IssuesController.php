<?php

namespace App\Http\Controllers;
use App\Issues;
use Illuminate\Http\Request;

class IssuesController extends Controller
{
    public function addIssue(){
    	return view('backend.issues.add_issue');
    }

    public function saveIssue(Request $request){
    	Issues::create([
    		'issue_heading' => $request->issueHeading,
    		'issue_description' => $request->issueDescription,
    	]);
   		return redirect('/add-issue')->withMessage('Issue Added Successfully');
    }

    public function allIssue(){
    	$data=Issues::get();
    	return view('backend.issues.all_issue', compact('data'));
    }

    public function deleteIssue($id)
	{
		$data=Issues::findOrFail($id);
		$data->delete();
		return redirect('/all-issue')->withMessage('Issue Deleted');
	}
	public function editIssue($id){
		$data=Issues::findOrFail($id);
		return view('/backend.issues.edit_issue', compact('data'));
	}
	public function updateIssue(Request $request, $id){
		$info=Issues::findOrFail($id);
        // $input = $request->all();
        $info->update([
        	'issue_heading'=>$request->issueHeading,
        	'issue_description'=>$request->issueDescription,
        ]);
        // $info->update($input);
		return redirect('/all-issue')->withMessage('Issue updated successfully');
	}


    //Frontend
    public function issues(){
        $data=Issues::get();
        return view('frontend.issues.issues', compact('data'));
    }

    public function issue($id){
        $data=Issues::findOrFail($id);
        return view('frontend.issues.issue', compact('data'));
    }

    public function issueAppearance(){
        
    }
}
