@extends('layouts.master')

@section('content')
<div class="grids">
	<div class="panel panel-widget forms-panel">
		<div class="forms">
			<div class="form-grids widget-shadow" data-example-id="basic-forms"> 
				<div class="col-md-12">
					<a href="{{route('branches.index')}}" class="btn btn-default">All Branches</a>
					@include('common.flash-message')
					<hr>
				</div>
				<div class="form-body">
					<form action="{{route('branches.store')}}" method="post">
					{{ csrf_field() }}

						<div class="form-group"> 
							<label for="">Branch Name</label> 
							<input type="text" name="name" class="form-control" id="" placeholder="Branch Name" required> 
						</div>						

						<div class="form-group">
							<label for="selector1">Area</label>
							<select name="area_id" id="selector1" class="form-control" required>
								<option value="">Select</option>
								@foreach($areas as $area)
								<option value="{{$area->id}}">{{$area->name}}</option>
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="block">Block</label> 
							<input type="text" name="block" class="form-control" id="block" placeholder="Block"> 
						</div>

						<div class="form-group">
							<label for="road_no">Road No</label> 
							<input type="text" name="road_no" class="form-control" id="road_no" placeholder="Road No"> 
						</div>

						<div class="form-group">
							<label for="house_no">House No</label> 
							<input type="text" name="house_no" class="form-control" id="house_no" placeholder="House No"> 
						</div>

						<div class="form-group">
							<label for="house_name">House Name</label> 
							<input type="text" name="house_name" class="form-control" id="house_name" placeholder="House Name"> 
						</div>

						<div class="form-group">
							<label for="floor">Floor</label> 
							<input type="text" name="floor" class="form-control" id="floor" placeholder="Floor"> 
						</div>	

						<button type="submit" class="btn btn-default">Submit</button>
					</form> 
				</div>
			</div>
		</div>
	</div>
</div>
@endsection