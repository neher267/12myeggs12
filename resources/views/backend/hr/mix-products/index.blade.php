@extends('layouts.master')

@section('content')
<div class="grids">
	<div class="panel panel-widget forms-panel">
		<div class="forms">
			<div class="row">
				<div class="col-md-12">					
					<a href="{{route('mix-products.create')}}" class="btn btn-default">Add Mix Products</a>
					@include('common.flash-message')
					<hr>
				</div>
				<div class="col-md-12">
					<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
						<thead>
				            <tr>
								<th>Name</th>
								<th>Branch</th>
								<th>Actions</th>
				            </tr>
						</thead>
						<tbody>
						@foreach($packages as $package)
							<tr>
								<td>{{$package->name}}</td>
								<td>
									<?php
									echo $package->branch_id == null ? 'All Branches' : $package->branch()->first()->name;
									?>
								</td>
								<td>
									<a href="{{route('mix-products.edit', $package)}}" class="btn btn-default">Edit</a>
									<a href="{{route('mix-products.packages.index', $package)}}" class="btn btn-default">Packages</a>
									<a href="{{route('mix-products.images.index', $package)}}" class="btn btn-default">Images</a>
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