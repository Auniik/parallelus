@extends('layouts.backend.main_layout')
@section('title', 'Add Youtube Video Link')
@section('admin_content')
<div class="row">
	<div class="col-lg-12">
	    <h1 class="page-header">Add Video</h1>
	</div>
<!-- /.col-lg-12 -->
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
		    <div class="panel-heading">
		        Add video link from youtube
    		</div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-6">
                <?php
                    $message=Session::get('message');
                    if ($message) { 
                        echo '<div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$message.'
                              </div>'; 
                        Session::put('message',null);
                    }
                ?>
                <form role="form" action="{{ url('save-video')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Video Title</label>
                        <input type="text" name="videoTitle" class="form-control" placeholder="example: Human Experience Sustainable Future">
                    </div>
                    <div class="form-group">
                        <label>Short Description</label>
                        <textarea name="shortDescription" rows="3" class="form-control" maxlength="100" minlength="100" placeholder="example: Human Experience Sustainable Future"></textarea>
                    </div>
                    <label >Youtube Link</label>
                    <div class="form-group input-group">

                        <span class="input-group-addon">http://</span>
                        <input type="text" name="videoLink" class="form-control" placeholder="example: https://www.youtube.com/watch?v=Bey4XXJAqS8">
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