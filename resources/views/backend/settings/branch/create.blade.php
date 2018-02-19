@extends('layouts.master')

@section('content')
<div class="grids">
	<div class="progressbar-heading grids-heading">
		<h2>Forms</h2>
	</div>
	<div class="panel panel-widget forms-panel">
		<div class="forms">
			<div class="form-grids widget-shadow" data-example-id="basic-forms"> 
				<div class="form-title">
					<h4>Create Branch</h4>
				</div>
				<div class="form-body">
					<form>
						<div class="form-group"> 
							<label for="">Name</label> 
							<input type="" class="form-control" id="" placeholder="Name"> 
						</div>
						
						<div class="form-group"> 
							<label for="exampleInputFile">File input</label> 
							<input type="file" id="exampleInputFile">
							<p class="help-block">Example block-level help text here.</p> 
						</div>					

						 <button type="submit" class="btn btn-default">Submit</button>
					</form> 
				</div>
			</div>
		</div>
	</div>
</div>
@endsection