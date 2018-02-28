@extends('layouts.master')

@section('content')
<div class="registration">
		<div class="registration_left">
		<h2>create an account</h2>	 
		
		 <div class="registration_form">
		 <!-- Form -->
		 	@include('common.flash-message')
			<form action="{{route('register.store')}}" method="post">
			{{ csrf_field() }}

				<div>
					<label>
						<input name="name" placeholder="User Name" type="text" tabindex="1" required="" autofocus="">
					</label>
				</div>
				
				<div>
					<label>
						<input name="mobile" placeholder="Mobile No" type="text" tabindex="3" required="">
					</label>
				</div>
				<div class="sky-form">
					<div class="sky_form1">
						<ul>
							<li><label class="radio left"><input type="radio" name="gender" required value="male"><i></i>Male</label></li>
							<li><label class="radio"><input type="radio" name="gender" required value="female"><i></i>Female</label></li>
							<div class="clearfix"></div>
						</ul>
					</div>
				</div>
				<div class="sky-form">
					<div class="sky_form1">
						<ul>	
							@if($roles->count())
								@foreach($roles as $role)
									<li><label class="radio left"><input type="radio" name="role" value="{{$role->slug}}" required><i></i>{{$role->name}}</label></li>
								@endforeach
							@else
							<li>Insert roles first!</li>
							@endif 
							
							<div class="clearfix"></div>
						</ul>
					</div>
				</div>
				<div class="form-group">
					<label for="branch_id">Branch</label>
					<select name="branch_id" id="branch_id" class="form-control" required>
						<option value="">Select</option>
						@foreach($branches as $branch)
						<option value="{{$branch->id}}">{{$branch->name}}</option>
						@endforeach
					</select>
				</div>
				<div>
					<label>
						<input name="password" placeholder="password" type="password" tabindex="4" required="">
					</label>
				</div>						
				<div>
					<label>
						<input name="confirmed_password" placeholder="retype password" type="password" tabindex="4" required="">
					</label>
				</div>	
				<div>
					<input type="submit" value="create an account">
				</div>
				<div class="sky-form">
					<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>i agree to shoppe.com &nbsp;<a class="terms" href="#"> terms of service</a> </label>
				</div>
			</form>
			<!-- /Form -->
		</div>
	</div>
	<div class="clearfix"></div>
	</div>

@endsection