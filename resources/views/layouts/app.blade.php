<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Book Review</title>
	<link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
	<style type="text/css">
		.span{
			 margin-top: 4px;
		}
		.buku{
			color: red; font-style: italic
		}
		.form-control {
		    border-radius: 15px;
		}
		.btn {
		     border-radius: 15px;
		}
		.garis{
			border-right:1px solid red;
		}
		.proses{
			list-style: none; float: right;
		}
		.proses li{
			display: inline;
		}
		.jumbotron img{
			margin-top: 10px;
			margin-left: 40px;
		}
		.sini{
			font-style: italic;
			font-weight: bold;
			color: red;
		}
		.title{
			font-style: italic;
		}
		.proses2{
			list-style: none; float: left;
		}
		.proses2 li{
			display: inline;
			margin-left: 5px;
			font-size: 15px;
		}
		.user li{
			display: inline;
			margin-left: 5px;
			font-size: 15px;
		}
		.user input{
			margin-left: 30px;
		}
		
	</style>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" style="margin-left: 50px;">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Book Review</a>
    </div>
      <ul class="nav navbar-nav navbar-right" style="margin-right:50px;">
        <li><a href="{{route('login')}}">Login</a></li>
        <li><a href="{{route('register')}}">Register</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


@yield('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="{{ url('js/bootstrap.min.js') }}"></script>
</body>
</html>