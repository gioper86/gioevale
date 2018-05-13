<!DOCTYPE HTML>
<!--
	Dopetrope by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Vale & Gio</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div id="header">

        				<?php include 'partials/header.php';?>

						<!-- Banner -->
							<section id="banner">
								<header style="visibility:hidden">
									<h2>Howdy. This is Dopetrope.</h2>
									<p>A responsive template by HTML5 UP</p>
								</header>
							</section>
					</div>
				</div>

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div class="row">
							<div class="12u">

								<?php

								$lang = "en";
								if($params['lang']) {
									$lang = $params['lang'];
								}

								include "content/home_$lang.php";
								
								?>

							</div>
						</div>
						<div class="row">
							<div class="12u">
							</div>
						</div>
					</div>
				</div>

			<!-- Footer -->
			<?php include 'partials/footer.php';?>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<!-- <script>
					$(document).ready(function(){
						// var view = {
						//   name : "Joe",
						//   occupation : "Web Developer"
						// };
				
						//$("#nav").load("partials/nav.html");
						$("#nav").load("partials/nav.html",function(){
							console.log('loaded')
							gioMain(jQuery);
						//   var template = document.getElementById('template1').innerHTML;
						//   var output = Mustache.render(template, view);
						//   $("#person").html(output);
						});
					});	
			</script>			 -->
			<script src="assets/js/main.js"></script>
	</body>
</html>