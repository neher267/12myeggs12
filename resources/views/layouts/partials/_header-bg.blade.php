<div class="header">
	<div class="head-t">
		<div class="logo">
			<a href="index.html"><img src="{{asset('images/logo.png')}}" class="img-responsive" alt=""> </a>
		</div>
		<!-- start header_right -->
		<div class="header_right">
			<div class="rgt-bottom">
				<div class="log">
					@include('layouts.partials._login')
				</div>
				<div class="reg">
					<a href="register.html">REGISTER</a>
				</div>
				<div class="cart box_1">
					<a href="checkout.html">
					<h3> <span class="simpleCart_total">$0.00</span> (<span id="simpleCart_quantity" class="simpleCart_quantity">0</span> items)<img src="images/bag.png" alt=""></h3>
					</a>	
					<p><a href="javascript:;" class="simpleCart_empty">(empty card)</a></p>
					<div class="clearfix"> </div>
				</div>
				<div class="create_btn">
					<a href="checkout.html">CHECKOUT</a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="search">
				<form>
					<input type="text" value="" placeholder="search...">
					<input type="submit" value="">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>