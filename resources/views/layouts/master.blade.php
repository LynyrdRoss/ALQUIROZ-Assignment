<!DOCTYPE html>
<html>
<head>

	<title></title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('css/album.css') }}">

</head>
<body>

	<div class="navbar navbar-inverse bg-inverse">
	  <div class="container d-flex justify-content-between">
	    <a href="#" class="navbar-brand">Album</a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	  </div>
	</div>

	<!-- Content Goes here -->
	<div class="container">@yield('content')</div>

	<footer class="text-muted">
	  <div class="container">
	    <p class="float-right">
	      <a href="#">Back to top</a>
	    </p>
	    <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
	    <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
	  </div>
	</footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery-3.1.1.min.js') }}"></script>
</body>
</html>