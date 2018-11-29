@extends('layouts.backend.main_layout')
@section('title', 'All Slider')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sliders</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="table table-responsive">
        <table class="table">
        <?php
        $message=Session::get('message');
        if ($message) {
            echo '<div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'.$message.'
          </div>';
            Session::put('message',null);
        }
        ?>
        <thead>
        <tr>
            <th scope="col">SL</th>
            <th scope="col">Slider Images</th>
            <th scope="col">Slider Text</th>
            <th scope="col">Publication Status</th>
            <th scope="col" class="col-md-2">Actions</th>
        </tr>
        </thead>
        <tbody>
    <?php $sl=$sliders->firstItem() ?>
        @foreach($sliders as $slider)
            <tr>
                <th scope="row">{{$sl++}}</th>
                <td><img src="{{url($slider->slider_image)}}" alt="" style="height:70px; width: 200px"></td>
                <td>{{$slider->slider_text}}</td>

                @if($slider->publication_status==1)
                    <td class="center">
                        <span class="label label-success">Active</span>
                    </td>
                @else
                    <td class="center">
                        <span class="label label-danger">Inactive</span>
                    </td>
                @endif

                <td>
                    @if ($slider->publication_status==1)
                        <a class="btn btn-sm btn-warning" href="{{url('/slider/'.$slider->id.'/inactive')}}">
                            <i class="fa fa-thumbs-o-down fa-fw"></i>
                        </a>
                    @else
                        <a class="btn btn-sm btn-success" href="{{url('/slider/'.$slider->id.'/active')}}">
                            <i class="fa fa-thumbs-o-up fa-fw"></i>
                        </a>
                    @endif
                    <a class="btn btn-sm btn-primary" href="{{url('/slider/'.$slider->id.'/edit')}}">Edit</a>
                    <a class="btn btn-sm btn-danger" id="delete" href="{{url('/slider/'.$slider->id.'/delete')}}" onclick="return confirmDelete();">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="text-center">
        {{$sliders->links()}}
    </div>
    </div>
    

@endsection