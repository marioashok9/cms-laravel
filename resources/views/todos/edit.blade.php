@extends('layouts.app');

@section('content')

 <form method="post" action="/todos/{{$todo->id}}/update">

 	@csrf
 	
 
 		<div class="form-group">
 			<input type="text" name="name" placeholder="name" class="form-control" value="{{$todo->name}}">
 			<p class="text-danger">
 				{{$errors->first('name')}}
 			</p>
 			 
 		</div>

 		<div class="form-group">
 			<input type="text" name="description" placeholder="Description" class="form-control" value="{{$todo->description}}">
 			<p class="text-danger">
 				{{$errors->first('description')}}
 			</p>
 			 
 			 
 		</div>

 		<div class="form-group">
 			<button type="submit" name="btn" class="btn btn-danger">EDIT TODOS</button>
 		</div>
  

 </form>


@endsection