@extends('layouts.backend')
@section('admin_content')
<div class="row">
	<div class="col-lg-12">
	    <h1 class="page-header">Site Configuration</h1>
	</div>
<!-- /.col-lg-12 -->
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
		    <div class="panel-heading">
		        Basic Site Configuration
    		</div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-6">
                <form role="form" action="{{route('save-config')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Profile Name</label>
                        <input class="form-control" value="{{$configs==null ? '' : $configs->profile_name}}" name="profileName" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label>Designation</label>
                        <input class="form-control" value="{{$configs==null ? '' : $configs->designation}}" name="designation" placeholder="Enter your designation">
                    </div>
                    <div class="form-group">
                        <label>Quote Message</label>
                        <textarea class="form-control" name="quoteMessage" placeholder="Enter your quote">{{$configs==null ? '' : $configs->quote_message}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" value="{{$configs==null ? '' : $configs->address}}" name="address" placeholder="Enter your address">
                    </div>
                    <div class="form-group">
                        <label>Backgraound Image</label>
                        <input type="file" class="form-control"  name="bgImage" placeholder="Enter Backgraound image">
                    </div>

                    <div class="form-group">
                        {{-- <input type="hidden" name="config_id" value="{{$configs->config_id}}"> --}}
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