@extends('layouts.master')

@section('content')
<div class="grids">
	<div class="panel panel-widget forms-panel">
		<div class="forms">
			<div class="form-grids widget-shadow" data-example-id="basic-forms"> 
				<div class="form-title" style="margin-top: 15px">
					<h4>Create Mix Package</h4>
				</div>

				@include('common.flash-message')
				
				<div class="form-body">
					<form action="{{route('mix-packages.store')}}" method="post">
					{{ csrf_field() }}

						<div class="form-group"> 
							<label for="name">Mix Package Name</label> 
							<input type="text" name="name" class="form-control" id="name" placeholder="Ex: Chal + dim + tel" required> 
						</div>	

						<div class="form-group"> 
							<label for="title">Package Title</label> 
							<input type="text" name="title" class="form-control" id="title" placeholder="Ex: This is for you mom!" required> 
						</div>	

						<div class="form-group"> 
							<label for="description">Package Discription</label>
							<textarea name="description" id="description" cols="50" rows="4" class="form-control"></textarea>			
						</div>						

						<button type="submit" class="btn btn-default">Save</button>
					</form> 
				</div>
			</div>
		</div>
	</div>
</div>
@endsection