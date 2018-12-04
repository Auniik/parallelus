@extends('layouts.backend.main_layout')
@section('title', 'Edit News')
@section('admin_content')
<div class="row">
	<div class="col-lg-12">
	    <h1 class="page-header">Edit News</h1>
	</div>
<!-- /.col-lg-12 -->
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
		    <div class="panel-heading">
		        Edit News
    		</div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-8">
                
                <form role="form" action="{{ url('/news/'.$article->id.'/update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group {{$errors->has('articleImage') ? 'has-error' : ''}}">
                        <label>Article Image</label>
                        <input type="file" class="form-control"  name="articleImage">
                         @if($errors->has('articleImage'))
                            <div class="help-block">
                                {{$errors->first('articleImage')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group {{$errors->has('newsHeading') ? 'has-error' : ''}}">
                        <label>News Headline</label>
                        <input class="form-control" name="newsHeading" value="{{$article->news_heading}}"  placeholder="Enter any issue heading">
                         @if($errors->has('newsHeading'))
                            <div class="help-block">
                                {{$errors->first('newsHeading')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group {{$errors->has('newsDescription') ? 'has-error' : ''}}">
                        <label>Description</label>
                        <textarea class="form-control" id="summernote" name="newsDescription">{{$article->description}}</textarea>
                         @if($errors->has('newsDescription'))
                            <div class="help-block">
                                {{$errors->first('newsDescription')}}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
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