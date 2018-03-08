@extends('layouts.master')

@section('content')
<div class="grids">
	<div class="panel panel-widget forms-panel">
		<div class="forms">
			<div class="row">
				<div class="col-md-12">
					<a href="{{route('mix-package-names.index')}}" class="btn btn-default">Mix Package Names</a>
					<a href="{{route('products.index')}}" class="btn btn-default">Products</a>
					@include('common.flash-message')
					<hr>
				</div>

				<div class="col-md-12">
					<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
						<thead>
					            		<tr>					            		
								<th>Name</th>
								<th>Type</th>
								<th>Title</th>
								<th>Description</th>
								<th>Status</th>
								<th>Actions</th>
					            		</tr>
						</thead>
						<tbody>
						@foreach($packages as $package)
							<tr>
								<td>{{$package->packageable()->first()->name}}</td>
								<td style="text-transform: capitalize;">{{$package->packageable_type}}</td>
								<td>{{$package->title}}</td>
								<td>{{$package->description}}</td>
								<td>
									@if($package->status == true)
									<span>Active</span>
									@else
									<span>Disable</span>									
									@endif
								</td>
								
								<td>
									<a href="{{route('categories.edit', $package)}}" class="btn btn-default">Edit</a>
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