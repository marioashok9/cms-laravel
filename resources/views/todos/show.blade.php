@extends('layouts.app');

@section('content')

<div class="container">
	 <h1 class="text-center">
 	{{$todo->name}}
 </h1>

 <p class="lead text-center">
 	{{$todo->description}}
 </p>

 <a href="/todos/{{$todo->id}}/edit" class="btn btn-danger">EDIT</a>
  <a href="/todos/{{$todo->id}}/destroy" class="btn btn-danger">DELETE</a>

   @if(!$todo->completed)

  <a href="/todos/{{$todo->id}}/complete" class="btn btn-danger">COMPLETED</a>


  @endif

</div>
 


@endsection