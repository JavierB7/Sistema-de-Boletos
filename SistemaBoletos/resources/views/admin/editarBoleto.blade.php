@extends ('admin.index')

@section('contenido')  


	<div class="container bg-dark" style = "background-color: DimGray    ; border: 1px solid; text-align: center;border-radius: 5%; width: 380px; text-align: center;">  
	<h3 style="color:white"><strong>Editando boleto: {{$boleto->serial}}</strong></h3>
	<div class="row main">  
		{!!Form::model($boleto,['method'=>'PATCH', 'route'=>['admin.update', $boleto->id]])!!}			
		{{Form::token()}}
	    <form class="form-signin">
	    	<table>
		    	<div class="form-group">
		    		<tr><th><label style="color:white" for="serial" class="cols-sm-2 control-label">Serial:</label></th>
		    		<td><input type="number" class="form-control" name="serial" value="{{$boleto->serial}}"/></td></tr>
		    	</div>
		    	<div class="form-group">
		    		<tr><th><label style="color:white" for="evento" class="cols-sm-2 control-label">Evento:</label></th>
		    		<td><input type="text" class="form-control" name="evento" value="{{$boleto->evento}}"/></td></tr>
		    	</div>
		    	<div class="form-group">
		    		<tr><th><label style="color:white" for="fecha" class="cols-sm-2 control-label">Fecha:</label></th>
		    		<td><input type="txt" class="form-control" name="fecha" value="{{$boleto->fecha}}"/></td></tr>
		    	</div>
		    	<div class="form-group">
		    		<tr><th><label style="color:white" for="ubicacion" class="cols-sm-2 control-label">Ubicacion:</label></th>
		    		<td><select class="selectpicker" name="ubicacion" style="border: none;"> 
			                <option value="none">-Seleccione-</option> 
			                <option value="Altos">Altos</option> 
			                <option value="Medios">Medios</option> 
			                <option value="VIP">VIP</option>
			                <option value="Platino">Platino</option>
			        </select></td></tr>
		    	</div>

		    	<div class="form-group">
		    		<td><input type="hidden" class="form-control" name="usuario" value="{{$boleto->usuario}}"/></td></tr>
		    	</div>
		    
		    	<div class="form-group">
		    		<tr><th></th>
		    		<td><input class="btn btn-success btn-block" type="submit" name="boton" value="Guardar"></td></tr>
		    	</div>
		    </table>
	    </form>
	    {!!Form::close()!!}
	</div>
</div>


@endsection