<!DOCTYPE html>
<html lang="da">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>FashionDK - nyheder om dansk mode</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- CSS stuff -->
	{{ HTML::style('css/base.css') }}
	{{ HTML::style('css/layout.css') }}
	{{ HTML::style('css/skeleton.css') }}

</head>
<body>
	<div class="container">
		@yield('content')
	</div>
</body>
</html>