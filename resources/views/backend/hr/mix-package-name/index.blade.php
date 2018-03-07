@extends('layouts.master')

@section('content')
<div class="grids">
	<div class="panel panel-widget forms-panel">
		<div class="forms">
			<div class="row">
				<div class="col-md-12">					
					<a href="{{route('mix-package-names.create')}}" class="btn btn-default">Add Mix Package Name</a>
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
						@foreach($mix_packages as $mix_package)
							<tr>
								<td>{{$mix_package->name}}</td>
								<td>
									<?php
									echo $mix_package->branch_id == null ? 'All Branches' : $mix_package->branch()->first()->name;
									?>
								</td>
								<td>
									<a href="{{route('mix-packages.edit', $mix_package)}}" class="btn btn-default">Edit</a>
									<a href="{{route('mix-packages.packages', $mix_package)}}" class="btn btn-default">Packages</a>
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