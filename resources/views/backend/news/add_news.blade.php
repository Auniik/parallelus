@extends('layouts.backend.main_layout')
@section('title', 'Add News')
@section('admin_content')
<div class="row">
	<div class="col-lg-12">
	    <h1 class="page-header">Add Article</h1>
	</div>
<!-- /.col-lg-12 -->
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
		    <div class="panel-heading">
		        Add Artical
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
                <form role="form" action="{{ url('/news/save')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group {{$errors->has('articleImage') ? 'has-error' : ''}}">
                        <label>Feature Image</label>
                        <input type="file" class="form-control" name="articleImage">
                        @if($errors->has('articleImage'))
                            <div class="help-block">
                                {{$errors->first('articleImage')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group {{$errors->has('newsHeading') ? 'has-error' : ''}}">
                        <label>News Headline</label>
                        <input class="form-control" name="newsHeading" value="{{old('newsHeading')}}" placeholder="Enter a article headline">
                        @if($errors->has('newsHeading'))
                            <div class="help-block">
                                {{$errors->first('newsHeading')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group {{$errors->has('newsDescription') ? 'has-error' : ''}}">
                        <label>Description</label>
                        <textarea class="form-control" id="summernote" name="newsDescription">{{old('newsDescription')}}</textarea>
                        @if($errors->has('newsDescription'))
                            <div class="help-block">
                                {{$errors->first('newsDescription')}}
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
@endsection