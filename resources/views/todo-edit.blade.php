@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
		<h3>Task List</h3>
		<form action="{{route('postEditRoute',$data->id)}}" method="POST" class="form-inline">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="text" name="name" class="form-controll" value="{{$data->name}}"><br><br>
				<input type="text" name="status" class="form-controll" value="{{$data->status}}"><br><br><br>
				<input type="submit" class="btn btn-primary" value="Update">
		


		</form>

		
</div>
	</div>
</div>
@endsection
