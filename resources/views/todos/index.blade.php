@extends('layouts.app');

@section('content')

<ul class="list-group-item">

@foreach($todos as $todo)

<li class="list-group-item">
	{{$todo->name}}

	<a href="/todos/{{$todo->id}}" class="btn btn-danger">VIEW</a>
	 <a href="/todos/{{$todo->id}}/edit" class="btn btn-danger">EDIT</a>
  <a href="/todos/{{$todo->id}}/destroy" class="btn btn-danger">DELETE</a>

  @if(!$todo->completed)

  <a href="/todos/{{$todo->id}}/complete" class="btn btn-danger">COMPLETED</a>


  @endif


</li>



@endforeach	
	

</ul>


 


@endsection