
@extends('layouts.master')

@section('content')
<div class="grids">
	<div class="panel panel-widget forms-panel">
		<div class="forms">
			<div class="row">
				<div class="col-md-12">
					<table class="table table-striped table-bordered datatable" cellspacing="0" width="100%">
						<thead>
						            <tr>
								<th>Name</th>
								<th>Images</th>
								<th>Required Points</th>
								<th>Actions</th>
						            </tr>
						</thead>
						<tbody>
						@foreach($gifts as $gift)
							<tr>
								<td>{{$gift->name}}</td>
								<td></td>
								<td>{{$gift->points}}</td>
								<td>
									<a href="{{route('gifts.edit', $gift)}}" class="btn btn-default">Edit</a>
								</td>
						            </tr>
						@endforeach
						</tbody>
		                    		</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection