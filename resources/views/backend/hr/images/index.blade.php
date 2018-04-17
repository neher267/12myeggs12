@extends('layouts.master')

@section('content')
<div class="grids">
	<div class="panel panel-widget forms-panel">
		<div class="forms">
			<div class="row">
				<div class="col-md-12">
					<a href="{{url($back_url)}}" class="btn btn-default">Back</a>
					<a href="{{url($add_url)}}" class="btn btn-default">Add New Image</a>		
					@include('common.flash-message')
					<hr>
					<p style="text-align: center; font-size: 22px;">{{$title}}</p>
					<hr>
				</div>

				<div class="col-md-12" style="overflow: auto;">
					<table class="table table-striped table-bordered datatable" cellspacing="0"	>
						<thead>
		            		<tr>
								<th style="width: 55px;">No</th>
								<th>Image</th>
								<th>Used For</th>
								<th>Status</th>
								<th>Actions</th>
		            		</tr>
						</thead>
						<tbody>
						<?php $i=0; ?>
						@foreach($images as $image)
							<tr>
								<td>{{++$i}}</td>
								<td>
									<img src="{{asset($image->src)}}" style="height: 50px; widows: 40px">
								</td>
								<td style="text-transform: capitalize;">{{$image->type}}</td>
								<td>
									@if($image->status == true)
									<span>Active</span>
									@else
									<span>Disable</span>									
									@endif
								</td>
								
								<td>
									<a href="#" class="btn btn-default">Edit</a>

									<form action="#" method="POST" style="display: inline;">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}

										<button type="submit" class="btn btn-danger">Delete</button>
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