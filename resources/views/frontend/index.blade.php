@extends('layouts.master')

@section('content')

	<!-- start content -->	
	<div class="w_content">
		<div class="women">
			<a href="#"><h4>Categories - <span>4 items</span> </h4></a>
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
			@foreach($categories as $category)
			<div class="grid1_of_4">
				<div class="content_box"><a href="">
					<img src="{{asset($category->thumbnail)}}" class="img-responsive">
				   	</a>
					<h4><a href="">{{$category->name}}</a></h4>
					<div class="grid_1 simpleCart_shelfItem">
				    
						<div class="item_add"><span class="item_price"><a href="#">Packages</a></span></div>
					 </div>
			   	</div>
			</div>
			@endforeach

			<div class="clearfix"></div>
		</div>			
		<!-- end grids_of_4 -->	
			
	</div>
  	<div class="clearfix"></div>
  </div>
<!-- end content -->
@endsection
