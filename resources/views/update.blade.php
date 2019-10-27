@extends('layout')

@section('content')
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<form action="{{ route('todo.save',['id' => $todo->id])}}" method="post">
				 {{ csrf_field() }}
				<input type="text" class="form-control input-lg" value="{{$todo->todo}}" name="todo" placeholder="Create a new todo">
			</form>
			
		</div>
	</div>

@stop