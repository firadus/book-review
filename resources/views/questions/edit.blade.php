@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:50px;">
    <div class="row">
    	<div class="panel panel-success">
  			<div class="panel-heading">Edit Questions</div>
 				<div class="panel-body">
   					<form action="" class="col-md-12">
        				<div class="form-group"><br>
	    					<label for="text">Title:</label>
	    					<input type="text" class="form-control" name="title">
						</div>
	  					<div class="form-group">
	    					<label for="description">Description:</label>
	    					<textarea class="form-control" cols="30" rows="10" name="description"></textarea>
	  					</div>
	  					<button type="submit" class="btn btn-success">Send</button>
	  				</form>
	  			</div>
  			</div>
		</div>
  	</div>       
</div>
@endsection
