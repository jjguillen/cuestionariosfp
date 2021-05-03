@extends('layout')

@section('title', 'CONTACTO')

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
							<h3>Envíanos tu consulta</h3>
							<form id="fs-frm" name="department-contact-form" accept-charset="utf-8" action="https://formspree.io/f/xyylkddk" method="post">
								<div class="form-group">
									<label for="full-name">Nombre completo</label>
									<input type="text" name="name" id="full-name" class="form-control" placeholder="" required="">
									<br>
									<label for="email-address">Dirección de email</label>
									<input type="email" name="_replyto" id="email-address" class="form-control" placeholder="email@domain.tld" required="">
									<br>
									<label for="department">Curso</label>
									<input type="text" name="curso" id="curso" class="form-control" placeholder="4º ESO" required="">
									<br>
									<label for="message">Mensaje</label>
									<textarea rows="5" name="message" id="message" class="form-control" placeholder="" required=""></textarea>
									<br>
									<input type="hidden" name="_subject" id="email-subject" value="Department Contact Form Submission">
								</div>
								<input type="submit" value="Enviar consulta">
							</form>
							</section>
						</section>

					</div>

				</div>
				<!-- row -->

			</div>
			<!-- container -->
		</div>
		<!-- /About -->
@endsection
		