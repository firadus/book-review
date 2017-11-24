@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="jumbotron">
			  	<h3>Review Buku Anda, <span class="sini">Di Sini !</span></h3>
			  	<img src="{{ url('img/buku2.jpg') }}" alt="">
			  	<img src="{{ url('img/buku3.jpg') }}" alt="">
			</div>	
		</div>
		<form class="col-md-6">
			<div class="form-group">
	    		<label for="email">Title:</label>
	    		<input type="email" class="form-control" name="title">
			</div>
	  		<div class="form-group">
	    		<label for="pwd">Description:</label>
	    		<textarea class="form-control" cols="30" rows="10" name="description"></textarea>
	  		</div>
	  		<button type="submit" class="btn btn-success">Submit</button>
		</form> 
	</div>
</div>
@endsection