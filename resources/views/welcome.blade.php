@extends('layout')

@section('title', 'CUESTIONARIOS DE SELECCIÓN DE CICLOS FORMATIVOS EN EL IES JAROSO')



@section('contenido')

		<!-- Home -->
		<div id="about" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="col-md-6">
						<div class="section-header">
							<h2><a href="{{ asset('/cgsuperior') }}">CICLOS FORMATIVOS DE GRADO SUPERIOR </a></h2>
						</div>

						<!-- feature -->
						<div class="feature">
							<i class="feature-icon fa fa-desktop"></i>
							<div class="feature-content">
								<h4>Desarrollo de aplicaciones Web</h4>
								<p>Programador web: Java, MySQL, HTML5, CSS3, PHP, Laravel, Javascript, JQuery, Angular, MongoDB, Git, Docker, ...</p>
							</div>
						</div>
						<!-- /feature -->

						<!-- feature -->
						<div class="feature">
							<i class="feature-icon fa fa-users"></i>
							<div class="feature-content">
								<h4>Guías, información y asistencias turísticas</h4>
								<p>Guía turístico, organizador actividades turísticas, recepcionista, organizador eventos, ...</p>
							</div>
						</div>
						<!-- /feature -->

                        <br><br>
                        <div class="section-header">
							<h2><a href="{{ asset('/cgsuperior') }}">CICLOS FORMATIVOS DE GRADO MEDIO</a></h2>
						</div>

						<!-- feature -->
						<div class="feature">
							<i class="feature-icon fa fa-euro"></i>
							<div class="feature-content">
								<h4>Gestión administrativa</h4>
								<p>Auxiliar administrativo: recursos humanos, tesorería, comercial, atención al cliente, banca, seguros, ...</p>
							</div>
						</div>
						<!-- /feature -->

						<!-- feature -->
						<div class="feature">
							<i class="feature-icon fa fa-flask"></i>
							<div class="feature-content">
								<h4>Operaciones de laboratorio</h4>
								<p>Muestreador, experto en ensayos de campo, auxiliar o técnico de laboratorio de química, ...</p>
							</div>
						</div>
						<!-- /feature -->

                        <!-- feature -->
						<div class="feature">
							<i class="feature-icon fa fa-mobile"></i>
							<div class="feature-content">
								<h4>Instalaciones de telecomunicaciones</h4>
								<p>Montador y configurador infraestructuras telecomunicaciones, técnico de sistemas y redes, ...</p>
							</div>
						</div>
						<!-- /feature -->

                        <!-- feature -->
						<div class="feature">
							<i class="feature-icon fa fa-wrench"></i>
							<div class="feature-content">
								<h4>Soldadura y calderería</h4>
								<p>Soldador, oxicortador, chapista, calderero, carpintero metálico, tubero, ...</p>
							</div>
						</div>
						<!-- /feature -->

					</div>

					<div class="col-md-6">
						<div class="about-img">
							<img src="{{ asset('./img/about.png') }}" alt="">
						</div>
					</div>

				</div>
				<!-- row -->

			</div>
			<!-- container -->
		</div>
		<!-- /About -->

@endsection