@extends('layouts.master')

@section('content')

	<!-- start content -->	
	<div class="w_content">
		<div class="women">
			<a href="#"><h4>Products - <span>{{$products->count()}} items</span> </h4></a>
			<ul class="w_nav">
				<li>Sort : </li>
	     			<li><a class="active" href="#">popular</a></li> |
	     			<li><a href="#">new </a></li> |
	     			<li><a href="#">discount</a></li> |
	     			<li><a href="#">price: Low High </a></li> 
	     			<div class="clear"></div>	
		     	</ul>
		     	<div class="clearfix"></div>	
		</div>
		
		<!-- grids_of_4 -->
		<div class="grids_of_4">
			@foreach($products as $product)
			<div class="grid1_of_4">
				<div class="content_box"><a href="">
					<img src="{{asset($product->thumbnail)}}" class="img-responsive" style="width: 100%">
				   	</a>
					<h4><a href="">{{$product->name}}</a></h4>
					<div class="grid_1 simpleCart_shelfItem">
				    
						<div class="item_add"><span class="item_price"><a href="#" style="border-radius: 50%">Packages</a></span></div>
					 </div>
			   	</div>
			</div>
			@endforeach
			<div class="clearfix"></div>
		</div>			
		<!-- end grids_of_4 -->

		<!-- grids_of_4 -->
		<div class="grids_of_4">
			@foreach($products as $product)
			@foreach($product->packages as $package)
			<div class="grid1_of_4">
				<div class="content_box"><a href="">
					<img src="{{asset($package->thumbnail)}}" class="img-responsive" style="width: 100%">
				   	</a>
					<h4><a href="">{{$package->title}}</a></h4>
					<div class="grid_1 simpleCart_shelfItem">
				    
						<div class="item_add"><span class="item_price"><a href="#" style="border-radius: 50%">Packages</a></span></div>
					 </div>
			   	</div>
			</div>

			@endforeach
			@endforeach

			<div class="clearfix"></div>
		</div>			
		<!-- end grids_of_4 -->				
	</div>
  	<div class="clearfix"></div>
  </div>
<!-- end content -->
@endsection
