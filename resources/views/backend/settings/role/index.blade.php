
@extends('layouts.master')

@section('content')
<div class="grids">
	<div class="panel panel-widget forms-panel">
		<div class="forms">
			<div class="row">
				<div class="col-md-12">
					<a href="{{route('roles.create')}}" class="btn btn-default"><i class="fas fa-plus-circle green-btn"></i>Add Role</a>
					@include('common.flash-message')
					<hr>
				</div>
				<div class="col-md-12">
					<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
						<thead>
				            <tr>
								<th>id</th>
								<th>Name</th>
								<th>Weight</th>
								<th>Actions</th>
				            </tr>
						</thead>
						<tbody>
						<?php $i=0; ?>
						@foreach($roles as $role)
							<tr>
								<td>{{++$i}}</td>
								<td>{{$role->name}}</td>
								<td>{{$role->weight}}</td>
								<td>
									<a href="{{route('roles.edit', $role)}}" class="btn btn-default">Edit</a>

									<form action="{{route('roles.destroy', $role)}}" method="POST" style="display: inline;">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}

										<button type="submit" class="btn btn-danger" onclick="return alertUser('delete it?')">Delete</button>
									</form>
								</td>
						    </tr>
						@endforeach
						</tbody>
		            </table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
