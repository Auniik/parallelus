@extends('layouts.backend.main_layout')
@section('title', 'Basic Site Configuration')
@section('admin_content')
<div class="row">
	<div class="col-lg-12">
	    <h1 class="page-header">Site Configuration</h1>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
		    <div class="panel-heading">
		        Site Configuration
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
                    <form role="form" action="{{ url('/settings/save')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Profile Name</label>
                            <input class="form-control" value="{{$config==null ? '' : $config->profile_name}}" name="profileName" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label>Designation</label>
                            <input class="form-control" value="{{$config==null ? '' : $config->designation}}" name="designation" placeholder="Enter your designation">
                        </div>
                        <div class="form-group">
                            <label>Quote Message</label>
                            <textarea class="form-control" name="quoteMessage" placeholder="Enter your quote">{{$config==null ? '' : $config->quote_message}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" value="{{$config==null ? '' : $config->address}}" name="address" placeholder="Enter your address">
                        </div>
                        <div class="form-group">
                            <label>Backgraound Image</label>
                            <input type="file" class="form-control"  name="bgImage">
                        </div>
                        <div class="form-group">
                            <label>Favicon</label>
                            <input type="file" class="form-control"  name="favicon">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success col-xs-12" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection