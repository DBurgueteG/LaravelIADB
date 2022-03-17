<!--COMPLETA: extiende el layout -->
<!--COMPLETA: empieza la sección -->
	<div class="container">
		<div class="col-sm-offset-2 col-sm-8">
		
			<!-- En este punto IRA el formulario para añadir una nueva actividad -->
			
			<!-- Actividades Actuales -->
			@if (sizeof($juegos) > 0)
				<div class="panel panel-default">
					<div class="panel-heading">
						 Actividades Actuales
					</div>

					<div class="panel-body">
						<table class="table table-striped task-table">
							<thead>
								<th>Actividad</th>
								<th>Fecha</th>
							</thead>
							<tbody>
								@foreach ($juegos as $juego)
									<tr>
										<td class="table-text"><div> {{ $juego['juego']}}</div></td>
										<td class="table-text"><div></div></td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			@endif
		</div>
	</div>
<!--COMPLETA: termina la sección -->
