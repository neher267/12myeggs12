@extends('layouts.master')

@section('content')
<div class="grids">
	<div class="panel panel-widget forms-panel">
		<div class="forms">
			<div class="row">				
				<div class="col-md-12">
					<a href="{{route('branches.create')}}" class="btn btn-default">Add Branch</a>
					@include('common.flash-message')
					<hr>
				</div>
				<div class="col-md-12">
					<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
						<thead>
						            <tr>
								<th>Name</th>
								<th>Address</th>
								<th>Actions</th>
						            </tr>
						</thead>
						<tbody>
						@foreach($branches as $branch)
							<tr>
								<td>{{$branch->name}}</td>
								<td>
									<?php
									$address = $branch->address()->first();
									echo $address->house_no != null ? 'House No: '.$address->house_no.', ': '';
									echo $address->house_name != null ? $address->house_name.', ' : '';
									echo $address->floor != null ? '(' .$address->floor .')': '';
									echo $address->road_no != null ? ', Road No: '.$address->road_no: '';
									echo $address->block != null ? ', Block: '.$address->block.', ': '';
									echo $address->area()->first()->name;
									?>
								</td>
								<td>
									<a href="{{route('branches.edit', $branch)}}" class="btn btn-default">Edit</a>
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