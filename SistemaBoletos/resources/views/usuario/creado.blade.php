@extends ('index2')

@section('contenido')    


<div class="container bg-dark" style = "background-color: DimGray    ; border: 1px solid; text-align: center;border-radius: 5%; width: 380px; text-align: center;">  
	<h3 style="color:white"><strong>Registro de Boleto</strong></h3>
	<div class="row main">  			
		{!!Form::open(array('url' => 'admin', 'method'=> 'POST', 'autocomplete'=>'off'))!!}
		{{Form::token()}}


	    <form class="form-signin">
	    	<table>
		    	<div class="form-group">
		    		<tr><th><label style="color:white" for="serial" class="cols-sm-2 control-label">Serial:</label></th>
		    		<td style="color:white">{{$serial}}</td></tr>
		    	</div>
		    	<div class="form-group">
		    		<tr><th><label style="color:white" for="evento" class="cols-sm-2 control-label">Evento:</label></th>
		    		<td style="color:white">{{$evento}}</td></tr>
		    	</div>
		    	<div class="form-group">
		    		<tr><th><label style="color:white" for="fecha" class="cols-sm-2 control-label">Fecha:</label></th>
		    		<td style="color:white">{{$fecha}}</td></tr>
		    	</div>

		    	
		    	<div class="form-group">
		    		<tr><th><label style="color:white" for="ubicacion" class="cols-sm-2 control-label">Ubicacion:</label></th>
		    		<td style="color:white">{{$ubicacion}}</td></tr>
		    	</div>
		    	
		    	
		    	<div class="form-group">
		    		<tr><th></th>
		    		<td><input class="btn btn-success btn-block" type="submit" name="boton" value="Registrar Boleto"></td></tr>
		    	</div>
		    </table>
	    </form>
	    {!!Form::close()!!}
	</div>
</div>


@endsection