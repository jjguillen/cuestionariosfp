<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>DAW - IES Jaroso</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>

		<!-- Font Awesome Icon -->
		<link type="text/css" rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>

		<!-- Header -->
		<header id="header" class="transparent-nav">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a class="logo" href="https://fp.iesjaroso.es/">
							<img src="{{ asset('./img/logo.png') }}" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Mobile toggle -->
					<button class="navbar-toggle">
						<span></span>
					</button>
					<!-- /Mobile toggle -->
				</div>

                <!-- Navigation -->
				<nav id="nav">
					<ul class="main-menu nav navbar-nav navbar-right">
						<li><a href="{{ asset('/cgmedio') }}">GRADO MEDIO</a></li>
                        <li><a href="{{ asset('/cgsuperior') }}">GRADO SUPERIOR</a></li>
					</ul>
				</nav>
				<!-- /Navigation -->


			</div>
		</header>
		<!-- /Header -->

		<!-- Home -->
		<div id="home" class="hero-area">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/home-background.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="home-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="white-text">@yield('title')</h1>
							@yield('politica')
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- /Home -->

		@yield('contenido')

		<!-- Contact CTA -->
		<div id="contact-cta" class="section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/cta2-background.jpg)"></div>
			<!-- Backgound Image -->

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="col-md-8 col-md-offset-2 text-center">
						<h2 class="white-text">Contacta con nosotros</h2>
						<p class="lead white-text">Para recibir más información no dudes en contactar y mandarnos tu consulta o sugerencia.</p>
						<a class="main-button icon-button" href="#">Contacta ahora</a>
					</div>

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Contact CTA -->

		<!-- Footer -->
		<footer id="footer" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- footer logo -->
					<div class="col-md-6">
						<div class="footer-logo">
							<a class="logo" href="https://fp.iesjaroso.es/">
								<img src="./img/logo.png" alt="logo">
							</a>
						</div>
					</div>
					<!-- footer logo -->


				</div>
				<!-- /row -->

				<!-- row -->
				<div id="bottom-footer" class="row">

					<!-- social -->
					<div class="col-md-4 col-md-push-8">
						<ul class="footer-social">
							<li><a href="https://es-es.facebook.com/pages/category/Middle-School/IES-Jaroso-200971709924005/" class="facebook">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li>
								<a href="https://twitter.com/jarosoies?lang=es" class="twitter">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a href="https://www.youtube.com/channel/UC5gMG8GL4Hr83vG3W7mX7Aw" class="youtube">
									<i class="fa fa-youtube"></i>
								</a>
							</li>
						</ul>
					</div>
					<!-- /social -->

					<!-- copyright -->
					<div class="col-md-8 col-md-pull-4">
						<div class="footer-copyright">
							<span>&copy; Copyright 2021. Todos los derechos reservados. | Javier Guillén</span>
						</div>
					</div>
					<!-- /copyright -->

				</div>
				<!-- row -->

			</div>
			<!-- /container -->

		</footer>
		<!-- /Footer -->

		<!-- preloader -->
		<div id='preloader'><div class='preloader'></div></div>
		<!-- /preloader -->

		<!-- jQuery Plugins -->
		<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

	</body>
</html>
