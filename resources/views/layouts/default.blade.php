 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>

	<title>Default Title</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<style type="text/css">
		.footer{
			margin: 4em 0;
		}
	</style>
</head>
<body>

	<!-- include _nav section -->
	@include('layouts.partials._nav')

	@yield('content')
	
	<!-- include _footer section -->
	@include('layouts.partials._footer')


	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</body>
</html>