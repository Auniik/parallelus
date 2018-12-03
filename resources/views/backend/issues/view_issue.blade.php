@extends('layouts.backend.main_layout')
@section('title', 'View Issue')
@section('admin_content')


    <div class="row">

        <div class="col-md-8">
            <header class="page-header">
                <h1 class="page-title">{{$data->issue_heading}}</h1>
            </header>

            <div class="entry-content">

                <p class="entry-thumbnail">
                    <img class="img-responsive" width="761" height="400" src="{{url($data->issue_image)}}" alt="featured image">
                </p>

                {!!$data->issue_description!!}

            </div>

        </div>
    </div> <!-- end row -->

@endsection