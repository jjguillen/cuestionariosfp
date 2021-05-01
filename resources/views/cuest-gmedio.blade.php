@extends('layout')

@section('title', 'CUESTIONARIO CICLO FORMATIVO DE GRADO MEDIO')

@section('contenido')

		<!-- Home -->
		<div id="about" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="col-md-12">
					
						<section class="row">
							<section class="col-md-12">
								<h3>Datos personales </h3>
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
										<select name="curso" id="curso" class="form-control" required>
											<option value="1eso">1º ESO</option>
											<option value="2eso">2º ESO</option>
											<option value="3eso">3º ESO</option>
											<option value="4eso">4º ESO</option>
											<option value="1fpb">1º FPB</option>
											<option value="2fpb">2º FPB</option>
											<option value="1bach">1º BACHILLERATO</option>
											<option value="2bach">2º BACHILLERATO</option>
										</select>
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
							<div class="col-md-12">
								<p>{{ $pregunta->pregunta }}</p>
							</div>
							<div class="col-md-10 tiny form-check">
								<input class="form-check-input" type="radio" name="pregunta{{ $pregunta->id }}" value="A"> 
								<label class="form-check-label">Me gusta</label>								
							</div>
							<div class="col-md-10 tiny form-check">								
								<input class="form-check-input" type="radio" name="pregunta{{ $pregunta->id }}" value="B">
								<label class="form-check-label"> Tengo dudas</label>
							</div>
							<div class="col-md-10 tiny form-check">								
								<input class="form-check-input" type="radio" name="pregunta{{ $pregunta->id }}" value="C">
								<label class="form-check-label"> No me gusta</label>
							</div>
							<div class="col-md-10 tiny form-check">								
								<input class="form-check-input" type="radio" name="pregunta{{ $pregunta->id }}" value="D">
								<label class="form-check-label"> No conozco esa actividad</label>
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
		<!-- /Home -->
@endsection
	