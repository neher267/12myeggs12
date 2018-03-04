<header class="logo1">
	<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
</header>
<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
<div class="menu">
	<ul id="menu" >		
		<li><a href="{{url('/')}}"><i class="fa fa-tachometer"></i> <span>Home</span></a></li>
		@role('admin')
		<li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span>Settings</span> <span class="fa fa-angle-right" style="float: right"></span></a>
			<ul id="menu-academico-sub" >
			   	<li id="menu-academico-avaliacoes" ><a href="{{route('areas.create')}}">Area</a></li>
			   	<li id="menu-academico-avaliacoes" ><a href="{{route('branches.create')}}">Branch</a></li>
			   	<li id="menu-academico-avaliacoes" ><a href="{{route('districts.create')}}">Districts</a></li>
			   	<li id="menu-academico-avaliacoes" ><a href="{{route('departments.create')}}">Department</a></li>
			   	<li id="menu-academico-avaliacoes" ><a href="{{route('categories.create')}}">Categories</a></li>
			   	<li id="menu-academico-avaliacoes" ><a href="{{route('roles.create')}}">Roles</a></li>
			   	
			</ul>
		 </li>
		@endrole

		

		 <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> New Arrivals</span> <span class="fa fa-angle-right" style="float: right"></span></a>
			<ul id="menu-academico-sub" >
			   	<li id="menu-academico-avaliacoes" ><a href="shoes.html">Shoes</a></li>
				<li id="menu-academico-avaliacoes" ><a href="products.html">Watches</a></li>
				<li id="menu-academico-boletim" ><a href="sunglasses.html">Sunglasses</a></li>
			</ul>
		 </li>
		 <li><a href="{{url('bag/products')}}"><i class="lnr lnr-envelope"></i> <span>Bags</span></a></li>
		 <li><a href="{{url('details')}}"><i class="lnr lnr-envelope"></i> <span>Details</span></a></li>
		 <li><a href="{{route('checkout.index')}}"><i class="lnr lnr-envelope"></i> <span>Checkout</span></a></li>
	    	
	    	<li id="menu-academico" ><a href="#"><i class="lnr lnr-layers"></i> <span>Tabs & Calender</span> <span class="fa fa-angle-right" style="float: right"></span>
	    	</a>
			 <ul id="menu-academico-sub" >
				<li id="menu-academico-avaliacoes" ><a href="tabs.html">Tabs</a></li>
				<li id="menu-academico-boletim" ><a href="calender.html">Calender</a></li>

			  </ul>
		 </li>

		<li><a href="#"><i class="lnr lnr-chart-bars"></i> <span>Forms</span> <span class="fa fa-angle-right" style="float: right"></span></a>
			<ul>
				<li><a href="input.html"> Input</a></li>
				<li><a href="validation.html">Validation</a></li>
			</ul>
		</li>
	</ul>
</div>