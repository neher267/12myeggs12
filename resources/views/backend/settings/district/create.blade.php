@extends('layouts.master')

@section('content')
<div class="grids">
	<div class="panel panel-widget forms-panel">
		<div class="forms">
			<div class="form-grids widget-shadow" data-example-id="basic-forms"> 
				<div class="col-md-12">
					<a href="{{route('districts.index')}}" class="btn btn-default">All Districts</a>
					@include('common.flash-message')
					<hr>
				</div>
				
				<div class="form-body">
					<form action="{{route('districts.store')}}" method="post">
					{{ csrf_field() }}

						<div class="form-group"> 
							<label for="name">District Name</label> 
							<input type="text" name="name" class="form-control" id="name" placeholder="Branch Name" required> 
						</div>						

						<button type="submit" class="btn btn-default">Save</button>
					</form> 
				</div>
			</div>
		</div>
	</div>
</div>
@endsection