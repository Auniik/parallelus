@extends('layouts.backend')

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
                
                <form role="form" action="{{ url('update-news/'.$data->id)}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>News Heading</label>
                        <input class="form-control" name="newsHeading" value="{{$data->news_heading}}"  placeholder="Enter any issue heading">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" id="summernote" name="newsDescription">{{$data->description}}</textarea>
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