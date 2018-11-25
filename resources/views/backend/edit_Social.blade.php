@extends('layouts.backend')
@section('admin_content')
<div class="row">
	<div class="col-lg-12">
	    <h1 class="page-header">Edit Social</h1>
	</div>
<!-- /.col-lg-12 -->
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
		    <div class="panel-heading">
		        Social Link Management
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
                <form role="form" action="{{ url('update-social')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Facebook</label>
                        <input class="form-control" value="{{$config==null ? '' : $config->facebook}}" name="profileName" placeholder="Enter your facebook link">
                    </div>
                    <div class="form-group">
                        <label>Twitter</label>
                        <input class="form-control" value="{{$configs==null ? '' : $config->twitter}}" name="twitter" placeholder="Enter your twitter link">
                    </div>
                    <div class="form-group">
                        <label>Instagram</label>
                        <input type="text" class="form-control" value="{{$config==null ? '' : $configs->instagram}}" name="address" placeholder="Enter your Instagram profile link">
                    </div>
                    <div class="form-group">
                        <label>Youtube</label>
                        <input type="text" class="form-control" value="{{$config==null ? '' : $configs->youtube}}" name="address" placeholder="Enter your youtube profile link">
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