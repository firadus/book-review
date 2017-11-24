@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="jumbotron">
			  	<h3>Review Buku Anda, <span class="sini">Di Sini !</span></h3>
			  	<img src="{{ url('img/buku2.jpg') }}" alt="">
			  	<img src="{{ url('img/buku3.jpg') }}" alt="">
			  	<a href="" data-t></a>
			  	<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">Any Questions ?</button>
			</div>	
		</div>
		<form class="col-md-6">
			<div class="form-group">
	    		<label for="title">Title:</label>
	    		<input type="text" class="form-control" name="title">
			</div>
	  		<div class="form-group">
	    		<label for="pwd">Writer:</label>
	    		<input type="text" class="form-control" name="wiret">
	  		</div>
	  		<div class="form-group">
	    		<label for="pwd">Year:</label>
	    		<input type="text" class="form-control" name="year">
	  		</div>
	  		<div class="form-group">
	    		<label for="pwd">Cover:</label>
	    		<input type="text" class="form-control" name="cover">
	  		</div>
	  		<div class="form-group">
	    		<label for="pwd">Publisher:</label>
	    		<input type="text" class="form-control" name="publisher">
	  		</div>
	  		<button type="submit" class="btn btn-success">Save</button>
		 </form> 
		 
  <!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
  		<div class="container">
        	<div class="row">
	    		<div class="modal-dialog">
	      			<!-- Modal content-->
	      			<div class="modal-content">
	        			<div class="modal-header">
	          				<button type="button" class="close" data-dismiss="modal">&times;</button>
	          				<h4 class="modal-title">Questions</h4>
	        			</div>
	        			<form action="" class="col-md-12">
	        				<div class="form-group"><br>
		    					<label for="text" class="text-create">Title:</label>
		    					<input type="text" class="form-control" name="title">
							</div>
		  					<div class="form-group">
		    					<label for="description" class="text-create">Description:</label>
		    					<textarea class="form-control" cols="30" rows="10" name="description"></textarea>
		  					</div>
		  					<button type="submit" class="btn btn-success">Send</button>
		  				</form>
	        			{{-- <div class="modal-footer">
	          				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	       			 	</div> --}}
	      			</div>
			    </div>
	  		</div>
	  	</div>
	</div>
@endsection