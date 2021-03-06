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

	<!-- insert tracking code here-->

</head>
<body>
	<div class="container">
		<div class="two columns">
			<!-- Reklameplads -->
			<p style="color:#fff">Test</p>
		</div>
		<div class="twelve columns">
			<iframe marginwidth="0" marginheight="0" frameborder="0" scrolling="no" width="728" height="90" src="http://www.partner-ads.com/dk/visbannerrotation.php?rid=11448"></iframe>
			<h1 class="remove-bottom" style="margin-top: 40px">FashionDK.dk</h1>
			<h5>&nbsp;News fra den danske modeverden</h5>
			<hr />
		
			@yield('content')
		
		</div>	
		<div class="two columns">
			<!-- Reklameplads -->
		</div>
	</div>
</body>
</html>