@extends ('admin.index')

@section('contenido')
	<div class="row">
		<div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
			<h3>Usuario: {{$usuario->nombres}} eliminado</h3>
			

			{!!Form::model($usuario,['method'=>'DELETE', 'route'=>['usuario.destroy', $usuario->id]])!!}
			{{Form::token()}}
			<div class="form-group">
					<button class="btn btn-success" type="submit">Guardar</button>
					
			</div>
				
			

			{!!Form::close()!!}
		</div>
	</div>
@endsection