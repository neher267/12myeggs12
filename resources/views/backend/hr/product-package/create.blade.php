@extends('layouts.master')

@section('content')
<div class="grids">
	<div class="panel panel-widget forms-panel">
		<div class="forms">
			<div class="form-grids widget-shadow" data-example-id="basic-forms"> 
				<div class="col-md-12">
					<a href="{{route('products.packages', $package_for)}}" class="btn btn-default">back</a>
					@include('common.flash-message')
					<hr>
				</div>
				
				<div class="form-body">
					<form action="{{route('product-packages.store')}}" method="post">
					{{ csrf_field() }}

						<div class="form-group"> 
							<label for="name">Package For : {{$package_for->name}}</label> 
							<input type="hidden" name="product_id" value="{{$package_for->id}}">
						</div>	

						<div class="form-group"> 
							<label for="title">Package Title</label> 
							<input type="text" name="title" class="form-control" id="title" placeholder="Ex: This is for you mom!" required> 
						</div>	

						<div class="form-group"> 
							<label for="description">Package Discription</label>
							<textarea name="description" id="description" cols="50" rows="4" class="form-control"></textarea>			
						</div>						

						<button type="submit" class="btn btn-default">Save</button>
					</form> 
				</div>
			</div>
		</div>
	</div>
</div>
@endsection