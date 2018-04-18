@extends('layouts.master')

@section('content')
<div class="grids">
	<div class="panel panel-widget forms-panel">
		<div class="forms">
			<div class="row">
				<div class="col-md-12">
					<a href="{{route('mix-products.packages.index', $product)}}" class="btn btn-default">Back</a>				
					<a href="{{route('mix-products.packages.create', $product)}}" class="btn btn-default">Add New Package</a>
					@include('common.flash-message')
					<hr>
					<p style="text-align: center; font-size: 22px;">{{$title}}</p>
					<hr>
				</div>

				<div class="col-md-12">
					<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
						<thead>
		            		<tr>
								<th>Title</th>
								<th>Description</th>
								<th>Status</th>
								<th>Actions</th>
		            		</tr>
						</thead>
						<tbody>
						@foreach($packages as $package)
							<tr>
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
									<a href="" class="btn btn-default">Edit</a>
									<a href="{{route('mix-products.package.images.index', [$product, $package])}}" class="btn btn-default">Images</a>
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