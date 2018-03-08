@extends('layouts.master')

@section('content')
<div class="grids">
	<div class="panel panel-widget forms-panel">
		<div class="forms">
			<div class=" form-grids form-grids-right">
				<div class="widget-shadow " data-example-id="basic-forms"> 
					<div class="col-md-12">
					<a href="{{route('stock.index')}}" class="btn btn-default">Stock Products</a>
					@include('common.flash-message')
					<hr>
				</div>
					<div class="form-body">

						<table class="table table-striped">
							<thead>
								<tr>
									<td>Product Name</td>
									<td>Purchase Quantity</td>
									<td>Deposit Quantity</td>
									<td>Action</td>
								</tr>
								<tbody>
									@foreach($purchases as $purchase)	
									<tr>
										<td>{{$purchase->product->name}}</td>
										<td>{{$purchase->quantity}} {{$purchase->product->unit}}</td>
										<td>
											<form action="{{route('stock.store')}}" method="post">
											{{ csrf_field() }}
												<div class="row">
													<div class="col-sm-9">
														<input type="text" name="diposit" placeholder="Deposit Quantity"  style="float: right;">
														<input type="hidden" name="product_id" value="{{$purchase->product->id}}">	
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