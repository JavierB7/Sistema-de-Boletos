@extends ('admin.index')

@section('contenido')  

	<h1>Listado de eventos</h1>
	@foreach($usuarios as $u)
		
			<table class="table table-condensed table-hover table-bordered text-center" >
		       <tr style="background-color: black; color:white;"> 
		         <th> Nombres </th> 
		         <th> Apellidos </th> 
		         <th> Cédula </th>
		         <th> Opciones </th>
		       </tr> 
		       <tr>
			    <td> {{$u->nombres}} </td> 
			    <td> {{$u->apellidos}} </td>
			    <td> {{$u->cedula}} </td>
			    <td>

			    	{!!Form::open(array('url' => 'detalles', 'method'=> 'GET', 'autocomplete'=>'off'))!!}
			    		<input class="btn btn-info" type='hidden' name='id' value='{{$u->id}}'>
				    	<input class="btn btn-info" type='submit' name='detalles' value='Detalles'>	    	
			    	{!!Form::close()!!}
			    	
					<a href="{{URL::action('UsuariosController@edit',$u->id)}}"><button class ="btn btn-info">Editar</button></a>

			    	<a href="{{URL::action('UsuariosController@destroy',$u->id)}}"><button class ="btn btn-danger">Eliminar</button></a>
				    
			    </td>
			   </tr>
		       @foreach($boletos as $b) 

		        @if($b->usuario == $u->usuario)
		        <tr style="background-color: lightblue;"> 
		        	<th> Evento </th> 
		      	 	<th> Ubicacion </th>
		      	 	<th> Opciones </th>
		      	</tr>
		      	<tr> 
					<td> {{$b->evento}} </td> 
			    	<td> {{$b->ubicacion}} </td> 
			    	<td>


			    		{!!Form::open(array('url' => 'detallesBoleto', 'method'=> 'GET', 'autocomplete'=>'off'))!!}
			    		<input class="btn btn-info" type='hidden' name='id' value='{{$b->id}}'>
				    	<input class="btn btn-info" type='submit' name='detallesb' value='Detalles'>	    	
			    		{!!Form::close()!!}
			    		
				    		
				    	<a href="{{URL::action('BoletosController@edit',$b->id)}}"><button class ="btn btn-info">Editar</button></a>
				    	<a href="{{URL::action('BoletosController@destroy',$b->id)}}"><button class ="btn btn-danger">Eliminar</button></a>
				    	
			    	</td>
		        </tr>
		        @endif
		    	
			    	
				@endforeach
			</table>
		
		<br>
	@endforeach
	
	

@endsection