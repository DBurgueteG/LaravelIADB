@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="col-sm-offset-2 col-sm-8">
		
		<div class="panel panel-default">
    <div class="panel-heading">
        Nuevo Juego
    </div>

    <div class="panel-body">
        @include('common.errors')
        
        

        <!-- Formulario para añadir un juego -->
        <form action="{{url('/juego')}}" method="POST" class="form-horizontal">
           {{csrf_field()}}

            <!-- Nombre del juego  -->
            <div class="form-group">
                <label for="juego-nombre" class="col-sm-3 control-label">Juego</label>

                <div class="col-sm-6">
                    <input type="text" name="juego" id="juego-nombre" class="form-control" value="{{old('juego')}}">
                </div>
            </div>
            <!-- Tipo del juego  -->
            <div class="form-group">
                <label for="juego-tipo" class="col-sm-3 control-label">Tipo</label>

                <div class="col-sm-6">
                    <input type="text" name="tipo" id="juego-tipo" class="form-control" value="{{old('tipo')}}">
                </div>
            </div>
			<!-- Fecha del juego  -->
            <div class="form-group">
                <label for="juego-fecha" class="col-sm-3 control-label">Fecha (YYYY-MM-DD)</label>

                <div class="col-sm-6">
                    <input type="text" name="fecha" id="juego-fecha" class="form-control" value="{{old('fecha')}}">
                </div>
            </div>

            <!-- Add Juego Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i>Nuevo Juego
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

			
			<!-- Juegos Actuales -->
			@if (sizeof($juegos) > 0)
				<div class="panel panel-default">
					<div class="panel-heading">
						 Juegos Actuales
					</div>

					<div class="panel-body">
						<table class="table table-striped task-table">
							<thead>
								<th>ID</th>
								<th>Juego</th>
								<th>Tipo</th>
								<th>Fecha</th>
							</thead>
							<tbody>
								@foreach ($juegos as $juego)
									<tr>
										<td class="table-text"><div> {{ $juego['id']}}</div></td>
										<td class="table-text"><div>{{ $juego['juego']}}</div></td>
										<td class="table-text"><div>{{ $juego['tipo']}}</div></td>
										<td class="table-text"><div>{{ $juego['fecha']}}</div></td>
										<td class="table-text">
											<form action="{{url('/juego/deletejuego')}}" method="POST">
												{{csrf_field()}}
												<input type="hidden" name="id_juego" value="{{$juego->id}}"/>
												<button type="submit" class="btn btn-danger">
													<i class="fa fa-trash"></i>Borrar
												</button>
											</form>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			@endif
		</div>
	</div>
@endsection
