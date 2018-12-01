@extends('layouts.backend.main_layout')
@section('title', 'Edit Slider')
@section('admin_content')
<div class="row">
	<div class="col-lg-12">
	    <h1 class="page-header">Edit Slider</h1>
	</div>
<!-- /.col-lg-12 -->
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
		    <div class="panel-heading">
		        Edit Slider
    		</div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-8">
                
                <form role="form" action="{{ url('/slider/'.$slider->id.'/update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Slider Text</label>
                        <input class="form-control" name="sliderText" value="{{$slider->slider_text}}"  placeholder="Enter floating text on a slider">
                    </div>
                    <div class="form-group ">
                        <label>Slider Image</label>
                        <input type="file" class="form-control"  name="sliderImage">
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