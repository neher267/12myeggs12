@extends('layouts.master')

@section('content')
<div class="grids">
	<div class="panel panel-widget forms-panel">
		<div class="forms">
			<div class="row">
				<div class="col-md-12">
					<a href="{{route('mix-package-names.index')}}" class="btn btn-default">Back</a>
					<a href="{{route('products.index')}}" class="btn btn-default">Add Image</a>
					@include('common.flash-message')
					<hr>
				</div>

				<div class="col-md-12">
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection