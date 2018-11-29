@extends('layouts.backend.main_layout')
@section('title', 'Add Social Link')
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
                <form role="form" action="{{ url('/social/save')}}" method="post">
                    @csrf
                    <div class="form-group {{$errors->has('socialName') ? 'has-error' : ''}}">
                        <label>Social Name</label>
                        <select id="socialame" class="form-control" name="socialName">
                            <option value="">--Select Social Name--</option>
                            <option value="fa fa-facebook"> Facebook</option>
                            <option value="fa fa-twitter"> Twitter</option>
                            <option value="fa fa-google"> Google+</option>
                            <option value="fa fa-instagram"> Instagram</option>
                            <option value="fa fa-youtube"> Youtube</option>
                            <option value="fa fa-linkedin"> Linkedin</option>
                            <option value="fa fa-reddit"> Reddit</option>
                            <option value="fa fa-snapchat-ghost"> Snapchat</option>
                            <option value="fa fa-pinterest"> Pinterest</option>
                            <option value="fa fa-skype"> Skype</option>
                            <option value="fa fa-tumblr"> Tumblr</option>
                            <option value="fa fa-vine"> Vine</option>
                            <option value="fa fa-skype"> Skype</option>
                        </select>
                        @if($errors->has('socialName'))
                            <div class="help-block">
                                {{$errors->first('socialName')}}
                            </div>
                        @endif
                    </div>
                    <label >Profile Link</label>
                    <div class="form-group {{$errors->has('socialLink') ? 'has-error' : ''}} input-group">
                        <span class="input-group-addon">http://</span>
                        <input type="text" name="socialLink" class="form-control" placeholder="example: www.facebook.com/username">
                        
                    </div>
                    @if($errors->has('socialLink'))
                        <div class="help-block">
                            <p class="text-danger">{{$errors->first('socialLink')}}</p>
                        </div>
                    @endif
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