<div class="top_bg">					
	<div class="header_top">
		<div class="top_right">
			<ul>
				<li><a href="contact.html">help</a></li>|
				<li><a href="contact.html">Contact</a></li>|
				<li><a href="">Delivery information</a></li>
				<li><a href="#">+8801784-255196</a></li>		
			</ul>
		</div>
		<!-- notifications start -->

		<!-- notifications end -->
		<div class="top_left">
			<ul class="nav navbar-nav navbar-right">
				@if('guest')
				<li><div class="log">
					@include('layouts.partials._login')
				</div>
				<div class="reg">
					<a href="">REGISTER</a>
				</div></li>
				@else
                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" style="color: white; font-size: 14px">
                            {{ $user->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{url('logout')}}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{url('logout')}}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endif
            </ul>			
		</div>		
		<div class="clearfix"> </div>
	</div>	
</div>
<div class="clearfix"></div>