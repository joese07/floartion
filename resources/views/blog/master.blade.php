<!DOCTYPE html>
<html lang="en">
<head>	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="A Blog Laravel 5">
	<meta name="author" content="Akhmad Dharma Kasman">

	<title>Zidivia</title>
	<link rel="icon" href="12.ico" type="image/icon">
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/blog.css') }}" rel="stylesheet">
	
	<!-- Bootstrap CSS file -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

</head>

<body>

	<!-- Header -->
	<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">			
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="{{ url('/') }}" class="navbar-brand">Zidivia</a>
			</div>
			<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
			<nav class="navbar-form navbar-right" role="search">
			@if (Auth::guest())
				  <!-- <a href="{{ url('/auth/login') }}" class="btn btn-info" role="button">Login</a> -->
			@else 
				  <a href="{{ url('/dashboard') }}" class="btn btn-warning" role="button">Dashboard</a>
				  <a href="{{ url('/auth/logout') }}" class="btn btn-success" role="button">Logout</a>
			@endif
		   </nav>
				<ul class="nav navbar-nav">
					<li class="active"><a href="{{ url('/') }}">Home</a></li>
					<li class="active"><a href="{{ url('/contactus') }}">Contact Us</a></li>
					<li class="active"><a href="{{ url('/gallery') }}">Gallery</a><li>
					<div class="col-md-10" style="margin-left: 250%; margin-top: 5%" > 	
					<form method="get" action="{{ url('/cari') }}">	
								<input type="text" class="form-control" name="cari" value="{{ old('search') }}">
							</div>
							</form>
				</ul>
			</nav>
		</div>
	</header>


	<!-- Body -->
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				@yield('content')
			</div>
			<div class="col-md-4">
			    @include('blog.sidebar')
			</div>
		</div>
	</div>
	

	<!-- Footer -->
	<footer>
		<div class="container">
			<hr />
			<p>
			<a href="{{ url('/auth/login') }}" class="text-center">Copyright &copy; Joese Rio Telysana 2017</a>
		</div>
	</footer>

	<!-- Jquery and Bootstrap Script files -->
	<script src="lib/jquery-2.0.3.min.js"></script>
	<script src="lib/bootstrap-3.0.3/js/bootstrap.min.js"></script>
</body>
</html>