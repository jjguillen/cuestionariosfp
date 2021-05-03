@extends('layout')

@section('title', 'INTERESADOS POR CICLO FORMATIVO')

@section('contenido')

		<!-- About -->
		<div id="about" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="col-md-12">
					
						<section class="row">
							<section class="col-md-12 text-primary">
								
							<section class="row">
							<section class="col-md-12">
								<h3>Seleccionar Ciclo Formativo y Año </h3>
								<p></p>
							</section>
						</section>

						<form action="/admin/calcularInteresados" method="post">
						@csrf

						<section class="row">
							<section class="col-md-12">
								
								<section class="row">
									<div class="col-md-6">
										<div class="form-group">
										<label for="curso">Año</label>
										<select name="year" id="year" class="form-control" required>
											<option value="2021">2021</option>
											<option value="2022">2022</option>
											<option value="2023">2023</option>
											<option value="2024">2024</option>
											<option value="2025">2025</option>
											<option value="2026">2026</option>
											<option value="2027">2027</option>
										</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
										<label for="curso">Ciclo formativo</label>
										<select name="ciclo" id="ciclo" class="form-control" required>
											<option value="Laboratorio">Operaciones de laboratorio</option>
											<option value="Telecomunicaciones">Instalaciones de telecomunicaciones</option>
											<option value="Soldadura">Soldadura y calderería</option>
											<option value="GAdministrativa">Gestión administrativa</option>
											<option value="DAW">Desarrollo de aplicaciones Web</option>
											<option value="Turismo">Guías, información y asistencias turísticas</option>
											<option value="ConstruccionesMetalicas">Construcciones metálicas</option>
										</select>
										</div>
									</div>
								</section>
							</section>
						</section>

						<section class="row">
							<div class="col-md-12">
								<button type="submit" class="btn btn-info" id="saveForm">Consultar</button>
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
@endsection
		