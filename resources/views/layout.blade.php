<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title>Farmer App</title>

	<!-- Favicon -->
	<!-- Insert Favicon Later -->

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
	
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="/css/atoosa.css">
	<link rel="stylesheet" type="text/css" href="/css/pia.css">
	<link rel="stylesheet" type="text/css" href="/css/betty.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">

	<!-- JS libs -->
	<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>

    <!-- Include the app.js file -->
    <!-- <script src="{{ 'js/app.js' }}" defer></script> -->
	<!-- <script type="text/javascript" src="{{asset('js/app.js')}}" defer></script> -->
  </head>
  <body>
  	<nav>
		@yield('topnav')
	</nav>

	<main>
		<div class="b-nav-spacer"></div>
		@yield('content')
		<div class="b-bottomnav-spacer"></div>
	</main>

	<nav>
		@yield('bottomnav')
	</nav>
    <!-- Include your App Component -->
    <!-- <App /> -->

	<!-- Include the app.js file -->
    <!-- <script src="{{ 'js/app.js' }}" defer></script> -->
	<!-- // jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="{{asset('js/betty.js')}}" defer></script>
  </body>
</html>