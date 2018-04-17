@extends('layouts.master')

@section('content')
<div class="grids">
	<div class="panel panel-widget forms-panel">
		<div class="forms">
			<div class="form-grids widget-shadow" data-example-id="basic-forms"> 
				
				<div class="col-md-12">
					<a href="{{url($url)}}" class="btn btn-default">Back</a>
					@include('common.flash-message')
					<hr>
					<p style="text-align: center; font-size: 22px;">{{$title}}</p>
					<hr>
				</div>
				
				<div class="form-body">
					<form action="{{url($url)}}" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}					

						<div class="form-group"> 
							<label for="type">Used For</label> 
							<select name="type" id="type_id" class="form-control" required>
								<option value="">Select</option>
								@foreach(config('settings.imgae-for') as $type)
								<option value="{{$type}}">{{$type}}</option>
								@endforeach
							</select>

							<input type="hidden" name="id" value="{{$imageable_id}}">
						</div>	

						<div class="form-group"> 
							<label for="src">Upload Image</label>
							<input type="file" name="src" class="form-control" required>			
						</div>						

						<button type="submit" class="btn btn-default">Save</button>
					</form> 
				</div>
			</div>
		</div>
	</div>
</div>
@endsection