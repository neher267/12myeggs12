@extends('layouts.master')

@section('content')
<div class="grids">
	<div class="panel panel-widget forms-panel">
		<div class="forms">
			<div class="form-grids widget-shadow" data-example-id="basic-forms"> 
				<div class="form-title" style="margin-top: 15px">
					<h4>Purchase Product</h4>
				</div>

				@include('common.flash-message')
				
				<div class="form-body">
					<form action="{{route('purchases.store')}}" method="post">
					{{ csrf_field() }}

						<div class="form-group">
							<label for="product_id">Product Name</label>
							<select name="product_id" id="product_id" class="form-control" required>
								<option value="">Select</option>
								@foreach($products as $product)
								<option value="{{$product->id}}">{{$product->name}}</option>
								@endforeach
							</select>
						</div>	
						
						<div class="form-group">
							<label for="merchant">Merchant Name</label>
							<select name="merchant_id" id="merchant" class="form-control" required>
								<option value="">Select</option>
								@foreach($merchants as $merchant)
								<option value="{{$merchant->id}}">{{$merchant->name}}</option>
								@endforeach
							</select>
						</div>

						<div class="form-group"> 
							<label for="quantity">Quantiry</label> 
							<input type="number" name="quantity" class="form-control" id="quantity" placeholder="Total Quantity" required> 
						</div>			

						<div class="form-group"> 
							<label for="price">Price</label> 
							<input type="number" name="price" class="form-control" id="price" placeholder="Total price" required> 
						</div>											

						<button type="submit" class="btn btn-default">Save</button>
					</form> 
				</div>
			</div>
		</div>
	</div>
</div>
@endsection