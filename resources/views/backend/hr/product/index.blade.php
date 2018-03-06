@extends('layouts.master')

@section('content')
<div class="grids">
	<div class="panel panel-widget forms-panel">
		<div class="forms">
			<div class="row">
				<div class="col-md-12">
					<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
						<thead>
						            <tr>
								<th>Name</th>
								<th>Category</th>
								<th>Unit</th>
								<th>Branch</th>
								<th>Actions</th>
						            </tr>
						</thead>
						<tbody>
						@foreach($products as $product)
							<tr>
								<td>{{$product->name}}</td>
								<td>{{$product->category()->first()->name}}</td>
								<td>{{$product->unit}}</td>
								<td>
									<?php
									echo $product->branch_id == null ? 'All' : $product->branch()->first()->name;
									?>
								</td>
								<td>
									<a href="{{route('categories.edit', $product)}}" class="btn btn-default">Edit</a>
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