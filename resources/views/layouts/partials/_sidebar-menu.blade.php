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
			   	<li id="menu-academico-avaliacoes" ><a href="{{route('areas.index')}}">Areas</a></li>
			   	<li id="menu-academico-avaliacoes" ><a href="{{route('branches.index')}}">Branchs</a></li>
			   	<li id="menu-academico-avaliacoes" ><a href="{{route('categories.index')}}">Categories</a></li>
			   	<li id="menu-academico-avaliacoes" ><a href="{{route('districts.index')}}">Districtss</a></li>
			   	<li id="menu-academico-avaliacoes" ><a href="{{route('departments.index')}}">Departments</a></li>
			   	<li id="menu-academico-avaliacoes" ><a href="{{route('expenses.index')}}">Expense</a></li>
			   	<li id="menu-academico-avaliacoes" ><a href="{{route('gifts.index')}}">Gifts</a></li>
			   	<li id="menu-academico-avaliacoes" ><a href="{{route('roles.index')}}">Roles</a></li>
			   	<li id="menu-academico-avaliacoes" ><a href="{{route('stock.index')}}">Stock</a></li>
			   	<li id="menu-academico-avaliacoes" ><a href="{{route('purchases.index')}}">Purcheases</a></li>
			   	<li id="menu-academico-avaliacoes" ><a href="{{route('products.index')}}">Products</a></li>
			   	<li id="menu-academico-avaliacoes" ><a href="{{route('product-packages.index')}}">Product Packages</a></li>
			   	<li id="menu-academico-avaliacoes" ><a href="{{route('mix-packages.index')}}">Mix Packages</a></li>
			   	<li id="menu-academico-avaliacoes" ><a href="{{route('mix-products.index')}}">Mix Package Names</a></li>
			   	<li id="menu-academico-avaliacoes" ><a href="{{route('register.create')}}">Register users</a></li>
			   	<li id="menu-academico-avaliacoes" ><a href="{{route('trets.index')}}">Trets</a></li>
			   	
			</ul>
		 </li>
		@endrole		

		 <!-- <li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> New Arrivals</span> <span class="fa fa-angle-right" style="float: right"></span></a>
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
		</li> -->
	</ul>
</div>