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
<div class="container">
	<div class="row">
		<div class="panel panel-success">
  			<div class="panel-heading">Book Review</div>
  				<div class="panel-body">
   				 	<h3>Title : <span class="title">Menyelami Framework Laravel</span></h3>
		    		<h3>Deskripsi :</h3><h3>Dilekangkapi dengan gambar yang membuat programer lebih mengerti</h3> 
		    		<hr class="my-4">
		    		<ul class="proses2">
		    			<li class="a">
		    				<a href="">
		    					<span class="glyphicon glyphicon-thumbs-up">Like</span>
		    				</a>
		    			</li>
		    			<span class="b">||</span>
		    			<li class="b">
		    				<a href="">
		    					<span class="glyphicon glyphicon-pencil">Questions</span>
		    				</a>
		    			</li>
			    		</ul><br>
			    		<hr class="my-4">
			    		<ul class="user">
			    			<li>
			    				<a href="">
			    					<span class="glyphicon glyphicon-user"> Nama_User</span> :
			    				</a>
			    					<span>Bukunya bagus tidak ?</span>
			    			</li>
			    		</ul>
			    		<div class="row">
				    		<ul class="user">
				    			<li class="col-md-1">
				    				<a href="">
				    					<span class="glyphicon glyphicon-user"> Bisa</span>
				    				</a>
				    			</li>
				    			<li class="col-md-8">
	  									<input type="text" class="form-control" placeholder="Tulis Pertanyaan">
	  							</li>
				    		</ul>
			    		</div>
  				</div>
			</div>
		</div>
	</div>
</div>
@endsection