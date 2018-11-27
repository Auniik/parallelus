@extends('layouts.backend.main_layout')
@section('title', 'Add a Issue')
@section('admin_content')
<div class="row">
	<div class="col-lg-12">
	    <h1 class="page-header">Add Issue</h1>
	</div>
<!-- /.col-lg-12 -->
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
		    <div class="panel-heading">
		        Add Issue
    		</div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-8">
                <?php
                    $message=Session::get('message');
                    if ($message) { 
                        echo '<div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$message.'
                              </div>'; 
                        Session::put('message',null);
                    }
                ?>
                <form role="form" action="{{ url('issue/save')}}" method="post">
                    @csrf
                    <div class="form-group {{$errors->has('issueHeading') ? 'has-error' : ''}}">
                        <label>Issue Heading</label>
                        <input class="form-control" name="issueHeading"  placeholder="Enter any issue heading">
                        @if($errors->has('issueHeading'))
                            <div class="help-block">
                                {{$errors->first('issueHeading')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group {{$errors->has('issueDescription') ? 'has-error' : ''}}">
                        <label>Description</label>
                        <textarea class="form-control" id="summernote" name="issueDescription"></textarea>
                        @if($errors->has('issueDescription'))
                            <div class="help-block">
                                {{$errors->first('issueDescription')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success col-xs-12" type="submit">Save</button>
                    </div>
                </form>
            </div>
            <!-- /.col-lg-6 (nested) -->
        </div>
        </div>
    </div>
</div>
@endsection