@extends('layouts.master')

@section('content')
<div class="grids">
	<div class="panel panel-widget forms-panel">
		<div class="forms">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
						<thead>
						            <tr>
								<th>Name</th>
								<th>Branch</th>
								<th>Actions</th>
						            </tr>
						</thead>
						<tbody>
						@foreach($departments as $department)
							<tr>
								<td>{{$department->name}}</td>
								<td>
									<?php
									echo $department->branch_id == null ? 'All Branches' : $department->branch()->first()->name;
									?>
								</td>
								<td>
									<a href="{{route('departments.edit', $department)}}" class="btn btn-default">Edit</a>
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