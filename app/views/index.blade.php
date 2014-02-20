@extends('layout.master')

@section('content')

	<div class="eight columns">
		<h3>Fokus på dansk mode ved verdens største designevent i Cape Town</h3>
		<h6>Dato: 19.02.2014 - Af: Naja Helene Hertzum - Fra: Fashionforum.dk</h6>
		<div class="clear"></div>
		<br>
			<p>Når Cape Town i næste uge er vært for verdens største designevent World Design Capital, er designer Henrik Vibskov og Eva Kruse fra Danish Fashion Institute på podiet for at snakke om ‘danish fashion’.</p>
			<h4 class="button"><a href="#">Læs mere</a></h4>
			<hr>
		</div>

		<?php 

			include_once $_SERVER["DOCUMENT_ROOT"].'/simple_html_dom.php';
//			include_once __DIR__.'/simple_html_dom.php';
			
			$url = 'http://fashionforum.dk/nyheder';
			
			$html = new simple_html_dom();
			
			$html->load_file($url);

			// foreach($html->find("article") as $article){
			//	echo $article;
			//}

			// Find all article blocks
			foreach($html->find("article") as $article) {
				$item['title']     = $article->find('a.fPermalink', 0)->plaintext;
				//$item['intro']    = $article->find('div.intro', 0)->plaintext;
				$articles[] = $item;
			}

			print_r($articles);

		?>

		<div class="two offset-by-one columns">
			<h3>Kategorier</h3>
			<p>
				<a href="#">Copenhagen Fashion Week</a>
				<hr>
				<a href="#">Copenhagen Fashion Week</a>
			</p>
		</div>
@stop