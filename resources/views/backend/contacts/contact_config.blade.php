@extends('layouts.backend.main_layout')
@section('title', 'Contact Page Setup')
@section('admin_content')

<div class="row">
	<div class="col-lg-12">
	    <h1 class="page-header">Contact Page Setup</h1>
	</div>
<!-- /.col-lg-12 -->
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
		    <div class="panel-heading">
		        Update Contact Page
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
                <form role="form" action="{{ url('/contact/appearance/update')}}" method="post">
                    @csrf
                    <div class="form-group {{$errors->has('pageHeading') ? 'has-error' : ''}}">
                        <label>Contact Page Heading</label>
                        <input class="form-control" value="{{$config==null ? 'Contact me' : $config->page_heading}}" name="pageHeading" placeholder="example: Contact me">
                        @if($errors->has('pageHeading'))
                            <div class="help-block">
                                {{$errors->first('pageHeading')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group {{$errors->has('description') ? 'has-error' : ''}}">
                        <label>Short Description</label>
                        <textarea class="form-control" name="description" required="" placeholder="Enter a short description">{{$config==null ? '' : $config->description}}</textarea>
                        @if($errors->has('description'))
                            <div class="help-block">
                                {{$errors->first('description')}}
                            </div>
                        @endif
                    </div>
                    {{-- <div class="form-group">
                        <label>Backgraound Image</label>
                        <input type="file" class="form-control"  name="bgImage">
                    </div> --}}
                    <div class="form-group">
                        {{-- <input type="hidden" name="config_id" value="{{$configs->config_id}}"> --}}
                        <button class="btn btn-success col-xs-12" type="submit">Update</button>
                    </div>
                </form>
            </div>
            <!-- /.col-lg-6 (nested) -->
        </div>
        </div>
    </div>
</div>

@endsection