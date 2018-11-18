@extends('layouts.backend')

@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
    <div class="panel-heading">
        Basic Form Elements
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-6">
                <form role="form" action="" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Profile Name</label>
                        <input class="form-control" name="profileName" placeholder="Enter your name">
                        {{-- <p class="help-block">Example block-level help text here.</p> --}}
                    </div>
                    <div class="form-group">
                        <label>Designation</label>
                        <textarea class="form-control" name="companyMoto" placeholder="Enter your designation"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Copyright</label>
                        <input class="form-control" name="companyName" placeholder="Enter copyrights">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-default" type="submit">Save</button>
                    </div>
                </form>
            </div>
            <!-- /.col-lg-6 (nested) -->
        </div>
        <!-- /.row (nested) -->
    </div>
@endsection