<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ventures @yield('title')</title>

    <meta name="description" content="Index page for ventures tech test">
    <meta name="author" content="Leonardo Bueno Nogueira Kruger">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.js"></script>
	@yield('head')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  </head>
  <body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="collapse navbar-collapse justify-content-center" id="navbarNav">
				<ul class="navbar-nav">
				  <li class="nav-item active">
					<a class="nav-link" href="/">Home</a>
				  </li>
				  <li class="nav-item active">
					<a class="nav-link" href="/post">Posts</a>
				  </li>
				</ul>
			</div>
		</nav>
	</header>
	<section>
		@yield('content')
	</section>
	<footer>
		@yield('footer')
	</footer>
		@yield('scripts')
  </body>
</html>

