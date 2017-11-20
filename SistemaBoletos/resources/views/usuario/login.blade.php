@extends ('index')

@section('contenido')    

<div class="container bg-dark" style = "background-color: DimGray    ; border: 1px solid; text-align: center;border-radius: 5%; width: 350px; text-align: center;">  
	<h3 style="color:white"><strong>Login</strong></h3>
	<div class="row main">  			
		
	    <form class="form-signin" method="POST" action="login">
	    	{{csrf_field()}}
	    	<table>
		    	<div class="form-group">
		    		<tr><th><label style="color:white" for="usuario" class="cols-sm-2 control-label">Usuario:</label></th>
		    		<td><input type="text" class="form-control" name="usuario" placeholder="Usuario..."/></td></tr>
		    	</div>
		    	<div class="form-group">
		    		<tr><th><label style="color:white" for="password" class="cols-sm-2 control-label">Password:</label></th>
		    		<td><input type="password" class="form-control" name="password" placeholder="Password..."/></td></tr>
		    	</div>
		    	<div class="form-group">
		    		<tr><th></th>
		    		<td><input class="btn btn-success btn-block" type="submit" name="boton-boleto" value="Acceder"></td></tr>
		    	</div>
		    </table>
	    </form>
	</div>
</div>



@endsection