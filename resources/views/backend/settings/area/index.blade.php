@extends('layouts.master')

@section('content')
<div class="grids">
	<div class="panel panel-widget forms-panel">
		<div class="forms">
			<div class="row">
				<div class="col-md-12">
					<a href="{{route('areas.create')}}" class="btn btn-default">Ceate Area</a>
					@include('common.flash-message')
					<hr>
				</div>
				<div class="col-md-12">
					<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
						<thead>
						            <tr>
								<th>Name</th>
								<th>District</th>
								<th>Actions</th>
						            </tr>
						</thead>
						<tbody>
						@foreach($areas as $area)
							<tr>
								<td>{{$area->name}}</td>
								<td>{{$area->district()->first()->name}}</td>
								<td>
									<a href="{{route('areas.edit', $area)}}" class="btn btn-default">Edit</a>
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