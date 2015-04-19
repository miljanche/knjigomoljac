<html>
<head>
	@yield('head')
</head>
<body>
	<header class="container">
		@yield('header')
	</header>

	<div class="container">
		@yield('content')
	</div>
	<footer class="container" style="height: 50px; background-color: whitesmoke; color: #333;">
		@yield('footer')
	</footer>
</body>
</html>