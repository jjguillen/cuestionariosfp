<!DOCTYPE html>
<html lang="en">
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
		<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

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
						<a class="logo" href="{{ asset('http://fp.iesjaroso.es/') }}">
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
			<div class="bg-image bg-parallax overlay" style="background-image:url({{ asset('./img/home-background.jpg')}} )"></div>
			<!-- /Backgound Image -->

			<div class="home-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="white-text">CUESTIONARIO CICLO FORMATIVO DE GRADO MEDIO</h1>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- /Home -->

		<!-- About -->
		<div id="about" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="col-md-12">
					
						<section class="row">
							<section class="col-md-12">
								<h3>Datos personales</h3>
								<p></p>
							</section>
						</section>

						<form action="/rellenarCuestionario" method="post">
						@csrf

						<section class="row">
							<section class="col-md-12">
								<section class="row">
									<div class="col-md-6">
										<div class="form-group">
										<label for="nombre">Nombre</label>
										<input type="text" class="form-control" name="nombre" id="nombre" maxlength="128" placeholder="Nombre" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form_group">
										<label for="apellidos">Apellidos</label>
										<input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos" required/>
										</div>
									</div>
								</section>
								<section class="row">
									<div class="col-md-4">
										<div class="form-group">
										<label for="curso">Curso</label>
										<input type="text" id="curso" class="form-control" name="curso" placeholder="Curso" required/>
										</div>
									</div>
									<div class="col-md-8">
										<label for="email">Email</label>
										<input type="email" class="form-control" name="email" id="email" placeholder="Email"  required/>
									</div>
								</section>
							</section>
						</section>

						<section class="row">
							<section class="col-md-12">
							@if($errors->any())
								<h4 class='text-danger'>{{$errors->first()}}</h4>
							@endif
							</section>
						</section>

						<hr>

						<section class="row">
							<section class="col-md-12">
								<h3>Preguntas</h3>
								<p></p>
							</section>
						</section>

						<br>

						@foreach($preguntas as $pregunta)

						 <!--  PREGUNTA x -->
						<section class="row">
							<div class="col-md-7">
								<p>{{ $pregunta->pregunta }}</p>
							</div>
							<div class="col-md-1 small font-weight-light">
								<label class="radio">
								<input type="radio" name="pregunta{{ $pregunta->id }}" value="A"> Me gusta
								</label>
							</div>
							<div class="col-md-1 small font-weight-normal">
								<label class="radio">
								<input type="radio" name="pregunta{{ $pregunta->id }}" value="B"> Tengo dudas
								</label>
							</div>
							<div class="col-md-1 small font-weight-normal">
								<label class="radio">
								<input type="radio" name="pregunta{{ $pregunta->id }}" value="C"> No me gusta
								</label>
							</div>
							<div class="col-md-2 small font-weight-normal">
								<label class="radio">
								<input type="radio" name="pregunta{{ $pregunta->id }}" value="D"> No conozco esa actividad
								</label>
							</div>
						</section>

						<hr>

						@endforeach

						<section class="row">
							<div class="col-md-12">
								<button type="submit" class="btn btn-info" id="saveForm">Guardar Encuesta</button>
								<button type="button" class="btn btn-danger" id="clearForm">Limpiar formulario</button>
							</div>
						</section>

						</form>

					</div>

				</div>
				<!-- row -->

			</div>
			<!-- container -->
		</div>
		<!-- /About -->

		

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
							<a class="logo" href="http://fp.iesjaroso.es/">
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
							<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
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
