@extends('layout')

@section('title', $ciclo." ".$year)

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
								
							@foreach($interesados as $interesado)
								<p>{{ $interesado }}</p>
							@endforeach

							</section>
						</section>

						<br>

						<section class="row">
							<section class="col-md-12 text-danger">
								<form action="/admin/atras" method="post">
								@csrf
									<button type="submit" class="btn btn-danger" id="saveForm">Atrás</button>
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
		