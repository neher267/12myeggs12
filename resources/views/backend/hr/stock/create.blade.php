@extends('layouts.master')

@section('content')
<div class="grids">
	<div class="panel panel-widget forms-panel">
		<div class="forms">
			<div class=" form-grids form-grids-right">
				<div class="widget-shadow " data-example-id="basic-forms"> 
					<div class="form-title">
						<h4>Manage Stock</h4>
					</div>
					@include('common.flash-message')
					<div class="form-body">

						<table class="table table-striped">
							<thead>
								<tr>
									<td>Sr.No</td>
									<td>Product Name</td>
									<td>Purchase Quantity</td>
									<td>Deposit Quantity</td>
									<td>Action</td>
								</tr>
								<tbody>
									@php
										$i =0;
									@endphp
									@foreach($purchase_products as $purchase_product)
									@php
										$product = $purchase_product->product()->first();
									@endphp
									<tr>
										<td>{{++$i}}</td>
										<td>{{$product->name}}</td>
										<td>{{$purchase_product->quantity}}{{$product->unit}}</td>
										<td>
											<form action="{{route('stock.store')}}" method="post">
											{{ csrf_field() }}
												<div class="row">
													<div class="col-sm-9">
														<input type="text" name="diposit" placeholder="Deposit Quantity"  style="float: right;">
														<input type="hidden" name="product_id" value="{{$product->id}}">	
														<input type="hidden" name="purchase_product_id" value="{{$purchase_product->id}}">	
													</div>
													<div class="col-sm-3">
														<input type="submit" class="btn">
													</div>									
												</div>						
											</form>
										</td>
										<td></td>
									</tr>
									@endforeach
								</tbody>
							</thead>
						</table>						 
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>
@endsection