@extends('layouts.backend.main_layout')
@section('title', 'Add Slider')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Slider</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add Slider
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8">
                            <?php
                            $message=Session::get('message');
                            if ($message) {
                                echo '<div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$message.'
                              </div>';
                                Session::put('message',null);
                            }
                            ?>
                            <form role="form" action="{{ url('/slider/save')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Slider Text</label>
                                    <input class="form-control" name="sliderText"  placeholder="Enter floating text on a slider">
                                </div>
                                <div class="form-group {{$errors->has('sliderImage') ? 'has-error' : ''}}">
                                    <label>Slider Image</label>
                                    <input type="file" class="form-control"  name="sliderImage">
                                    @if($errors->has('sliderImage'))
                                        <div class="help-block">
                                            {{$errors->first('sliderImage')}}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Publication Status</label>
                                    <select class="form-control" name="publicationStatus">
                                        <option value="1"> Active</option>
                                        <option value="0"> Inactive</option>
                                    </select>
                                </div>

                                <div class="text-warning">
                                    <p>Note: Upload at least two image to publish slider in homepage</p>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-success col-xs-12" type="submit">Save</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
@endsection