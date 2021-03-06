@extends('layouts.master')

@section('content')
<div class="grids">
	<div class="panel panel-widget forms-panel">
		<div class="forms">
			<div class="form-grids widget-shadow" data-example-id="basic-forms"> 
				<div class="col-md-12">
					<a href="{{route('gifts.index')}}" class="btn btn-default"><i class="fas fa-arrow-circle-left green-btn"></i>Back</a>
					@include('common.flash-message')
					<hr>
					<p style="text-align: center; font-size: 22px;">{{$title}}</p>
					<hr>
				</div>

				<div class="form-body">
					<form action="{{route('gifts.update', $gift)}}" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}
					{{ method_field('PUT') }}	

						<div class="form-group"> 
							<label for="name">Gift Name</label> 
							<input type="text" name="name" class="form-control" id="name" value="{{$gift->name}}" required> 
						</div>	

						<div class="form-group"> 
							<label for="points">Gain Points</label> 
							<input type="number" name="points" class="form-control" id="points" value="{{$gift->points}}" required> 
						</div>	

						<button type="submit" class="btn btn-default">Update</button>
					</form> 
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
