@extends('layouts.master')

@section('content')
<div class="grids">
	<div class="panel panel-widget forms-panel">
		<div class="forms">
			<div class="row">
				<div class="col-md-12">					
					<a href="{{route('mix-products.create')}}" class="btn btn-default">Add Mix Products</a>
					<a href="{{route('products.index')}}" class="btn btn-default">Products</a>
					@include('common.flash-message')
					<hr>
				</div>
				<div class="col-md-12">
					<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
						<thead>
				            <tr>
								<th style="width: 20px">No</th>
								<th>Image</th>
								<th>Name</th>
								<th>Branch</th>
								<th>Actions</th>
				            </tr>
						</thead>
						<tbody>
						<?php $i=0; ?>
						@foreach($packages as $package)
							<tr>
								<td>{{++$i}}</td>
								<td>
									<img src="{{asset($package->thumbnail)}}" style="height: 50px; box-shadow: 2px 4px 5px darkgrey; margin: 3px;">
								</td>
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