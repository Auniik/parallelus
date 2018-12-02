<?php

namespace App\Http\Controllers;
use App\Issues;
use App\IssueConfig;
use Illuminate\Http\Request;

class IssuesController extends Controller
{

    //ISSUE CRUD----------------------------------
    public function addIssue(){
    	return view('backend.issues.add_issue');
    }

    public function saveIssue(Request $request){
    	$validatedData = $request->validate([
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

    public function deleteIssue($id)
	{
		$data=Issues::findOrFail($id);
		$data->delete();
		return redirect('/issue/all')->withMessage('Issue Deleted');
	}
	public function editIssue($id){
		$issue=Issues::findOrFail($id);
		return view('/backend.issues.edit_issue', compact('issue'));
	}
	public function updateIssue(Request $request, $id){
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



    //-----------ISSUE APPEARANCE--------------------------

    public function issueAppearance()
    {
        $config = IssueConfig::first();
        return view('backend.issues.issue_config', compact('config'));
    }

    public function updateIssueConfig(Request $request)
    {
        $validatedData = $request->validate([
            'pageHeading' => 'required|max:150',
            'bgImage' => 'required|mimes:jpeg,bmp,jpg,png',
        ]); 
        $config = IssueConfig::first();
        $image=$config->bg_image;
        $isExist=$request->file('bgImage');
        if ($config) {
            $config->update([
                'page_heading' => $request->pageHeading,
            ]);
            if ($isExist) {
                $request->bgImage->storeAs('/', $config->bg_image);
                return redirect('/issue/appearance')->withMessage('Site information updated.');
            }
            
        }
        IssueConfig::create([
            'page_heading' => $request->pageHeading,
            'bg_image' => $request->bgImage->storeAs('/uploads/images/issues', 'issue-background.jpg'),
        ]);
        return redirect('/issue/appearance')->withMessage('Site information updated.');

    }
}
