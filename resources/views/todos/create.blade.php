@extends('layouts.app');

@section('content')

 <form method="post" action="/store-todos">

 	@csrf
 	
 
 		<div class="form-group">
 			<input type="text" name="name" placeholder="name" class="form-control" value="">
 			<p class="text-danger">
 				{{$errors->first('name')}}
 			</p>
 			 
 		</div>

 		<div class="form-group">
 			<input type="text" name="description" placeholder="Description" class="form-control" value="">
 			<p class="text-danger">
 				{{$errors->first('description')}}
 			</p>
 			 
 			 
 		</div>

 		<div class="form-group">
 			<button type="submit" name="btn" class="btn btn-danger">CREATE TODOS</button>
 		</div>
  

 </form>


@endsection