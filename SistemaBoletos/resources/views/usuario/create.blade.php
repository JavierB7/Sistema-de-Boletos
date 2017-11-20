@extends ('index')

@section('contenido')    

<div class="container bg-dark" style = "background-color: DimGray    ; border: 1px solid; text-align: center;border-radius: 5%; width: 380px; text-align: center;">  
	<h3 style="color:white"><strong>Registro</strong></h3>
	<div class="row main">  			
		{!!Form::open(array('url' => 'usuario', 'method'=> 'POST', 'autocomplete'=>'off'))!!}
		{{Form::token()}}
	    <form class="form-signin">
	    	<table>
		    	<div class="form-group">
		    		<tr><th><label style="color:white" for="nombres" class="cols-sm-2 control-label">Nombres:</label></th>
		    		<td><input type="text" class="form-control" name="nombres" placeholder="Nombres..."/></td></tr>
		    	</div>
		    	<div class="form-group">
		    		<tr><th><label style="color:white" for="apellidos" class="cols-sm-2 control-label">Apellidos:</label></th>
		    		<td><input type="text" class="form-control" name="apellidos" placeholder="Apellidos..."/></td></tr>
		    	</div>
		    	<div class="form-group">
		    		<tr><th><label style="color:white" for="cedula" class="cols-sm-2 control-label">Cedula:</label></th>
		    		<td><input type="number" class="form-control" name="cedula" placeholder="Cedula..."/></td></tr>
		    	</div>
		    	<div class="form-group">
		    		<tr><th><label style="color:white" for="direccion" class="cols-sm-2 control-label">Direccion:</label></th>
		    		<td><input type="text" class="form-control" name="direccion" placeholder="Direccion..."/></td></tr>
		    	</div>
		    	<div class="form-group">
		    		<tr><th><label style="color:white" for="sexo" class="cols-sm-2 control-label">Sexo:</label></th>
		    		<td><select class="selectpicker" name="sexo" style="border: none;"> 
			                <option value="none">-Seleccione-</option> 
			                <option value="masculino">Masculino</option> 
			                <option value="femenino">femenino</option> 
			                <option value="otro">Otro</option>
			        </select></td></tr>
		    	</div>
		    	<div class="form-group">
		    		<tr><th><label style="color:white" for="telefono" class="cols-sm-2 control-label">Telefono:</label></th>
		    		<td><input type="number" class="form-control" name="telefono" placeholder="Telefono.."/></td></tr>
		    	</div>
		    	<div class="form-group">
		    		<tr><th><label style="color:white" for="email" class="cols-sm-2 control-label">Correo:</label></th>
		    		<td><input type="text" class="form-control" name="email" placeholder="Email..."/></td></tr>
		    	</div>
		    	<div class="form-group">
		    		<tr><th><label style="color:white" for="usuario" class="cols-sm-2 control-label">Usuario:</label></th>
		    		<td><input type="text" class="form-control" name="usuario" placeholder="Usuario..."/></td></tr>
		    	</div>
		    	<div class="form-group">
		    		<tr><th><label style="color:white" for="password" class="cols-sm-2 control-label">Password:</label></th>
		    		<td><input type="password" class="form-control" name="password" placeholder="Password..."/></td></tr>
		    	</div>
		    	<div class="form-group">
		    		<td><input class="btn btn-primary" type="hidden" name="boton-boleto" value="Registrar Boleto"></td>
		    	</div>
		    	<div class="form-group">
		    		<tr><th></th>
		    		<td><input class="btn btn-success btn-block" type="submit" name="boton" value="Registrarse"></td></tr>
		    	</div>
		    </table>
	    </form>
	    {!!Form::close()!!}
	</div>
</div>


@endsection