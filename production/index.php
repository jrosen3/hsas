<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>HSAS</title>
		<meta name="description" content="Harvard Student Art Show" />
		<meta name="keywords" content="art, harvard, hsas" />
		<meta name="author" content="Jared Rosen" />
		<link rel="shortcut icon" href="../favicon.ico">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/icons.css" />
		<link rel="stylesheet" type="text/css" href="css/style5.css" />

		<link rel="stylesheet" type="text/css" href="css/ss.css" />
		<link rel="stylesheet" type="text/css" href="css/board.css" />
		<link rel="stylesheet" type="text/css" href="css/woahbar.css" />
		<link rel="stylesheet" type="text/css" href="css/divs.css" />

		<script src="js/switching.js"></script>
		<script src="js/woahbar.js"></script>

		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="woahbar" style="display:none">
			<span>
				We are now accepting submitions for the 5th annual Harvard Student Art Show. <a class="woahbar-link">Submit Here!</a>
			</span>
			<a class="close-notify" onclick="woahbar_hide();"><img class="woahbar-up-arrow" src="img/woahbar-up-arrow.png"></a>
		</div>
		<div class="woahbar-stub" style="display:none">
			<a class="show-notify" onclick="woahbar_show();"><img class="woahbar-down-arrow" src="img/woahbar-down-arrow.png"></a>
		</div>
		
		<div class="content">
			<?php include('home.php') ?>
			<?php include('board.php') ?>
			<?php include('gallery.php') ?>
			<?php include('artists.php') ?>
			<?php include('testimonials.php') ?>
			<?php include('connect.php') ?>
			<?php include('support.php') ?>
	   	</div>
		<div class="container">
			<nav id="bt-menu" class="bt-menu">
				<a class="bt-menu-trigger"><span>Menu</span></a>
				<ul>
					<li><a id="home-btn">Home</a></li>
					<li><a id="board-btn">Board</a></li>
					<li><a id="gallery-btn">Gallery</a></li>
					<li><a id="artists-btn">Artists</a></li>
					<li><a id="testimonials-btn">Testimonials</a></li>
					<li><a id="connect-btn">Contat</a></li>
					<li><a id="support-btn">Support</a></li>
				</ul>
				<ul>
					<li><a href="http://www.twitter.com/codrops" class="bt-icon icon-twitter">Twitter</a></li>
					<li><a href="https://plus.google.com/101095823814290637419" class="bt-icon icon-gplus">Google+</a></li>
					<li><a href="http://www.facebook.com/pages/Codrops/159107397912" class="bt-icon icon-facebook">Facebook</a></li>
					<li><a href="https://github.com/codrops" class="bt-icon icon-email">icon-github</a></li>
				</ul>
			</nav>
		</div><!-- /container -->
		<!-- <script type="text/javascript" src="//s3.amazonaws.com/scripts.hellobar.com/79d19187a51f8c1aa4125d050492ad7490b26ab4.js"></script>-->

	</body>
	<script src="js/classie.js"></script>
	<script src="js/borderMenu.js"></script>
</html>