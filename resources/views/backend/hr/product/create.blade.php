@extends('layouts.master')

@section('content')
<div class="grids">
	<div class="panel panel-widget forms-panel">
		<div class="forms">
			<div class="form-grids widget-shadow" data-example-id="basic-forms"> 
				<div class="form-title">
					<h4>Add New Product</h4>
				</div>

				@include('common.flash-message')

				<div class="form-body">
					<form action="{{route('products.store')}}" method="post">
					{{ csrf_field() }}

						<div class="form-group"> 
							<label for="name">Product Name</label> 
							<input type="text" name="name" class="form-control" id="name" placeholder="Product Name" required> 
						</div>	

						<div class="form-group">
							<label for="category_id">Product Category</label>
							<select name="category_id" id="category_id" class="form-control" required>
								<option value="">Select</option>
								@foreach($categories as $category)
								<option value="{{$category->id}}">{{$category->name}}</option>
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="unit">Measurement Unit</label>
							<select name="unit" id="unit" class="form-control" required>
								<option value="">Select</option>
								@foreach(config('settings.unites') as $unit)
								<option value="{{$unit}}">{{$unit}}</option>
								@endforeach
							</select>
						</div>				

						<button type="submit" class="btn btn-default">Save</button>
					</form> 
				</div>
			</div>
		</div>
	</div>
</div>
@endsection