@extends('layouts.backend')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">View Site Configuration</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row">
    <div class="col-lg-8">
        <div class="panel panel-default ">
            <div class="panel-heading">
                View Site Configs
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table class="table table-stripped ">
                	<tbody>
                		<tr>
	                        <th class="col-sm-4">Profile Name</th>
	                        <td class="col-sm-8">{{$configs->profile_name}}</td>
						</tr>
						<tr>
	                        <th class="col-sm-4">Designation</th>
	                        <td class="col-sm-8">{{$configs->designation}}</td>
						</tr>
						<tr>
	                        <th class="col-sm-4">Quote Message</th>
	                        <td class="col-sm-8">{{$configs->quote_message}}</td>
						</tr>
						<tr>
							<td class="col-sm-4"></td>
	                        <td class="col-sm-8">
								<a href="{{route('edit-config')}}" class="btn btn-primary">Edit</a>
							</td>
						</tr>
                	</tbody>
                    
                </table>
            </div>
        </div>
    </div>
</div>
@endsection