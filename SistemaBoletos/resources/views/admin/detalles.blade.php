@extends ('admin.index')

@section('contenido')  
<h3>Detalles de Usuario</h3>
<table class="table table-condensed table-hover table-bordered text-center" >
		       <tr style="background-color: black; color:white;"> 
		         <th> Nombres </th> 
		         <th> Apellidos </th> 
		         <th> Cédula </th>
		         <th> Direccion </th>
		         <th> Sexo </th>
		         <th> Telefono </th>
		         <th> Email </th>
		         <th> Usuario </th>
		         <th> Password </th>
		       </tr> 
		       <tr>
			    <td> {{$usuario->nombres}} </td> 
			    <td> {{$usuario->apellidos}} </td>
			    <td> {{$usuario->cedula}} </td>
			    <td> {{$usuario->direccion}} </td>
			    <td> {{$usuario->sexo}} </td>
			    <td> {{$usuario->telefono}} </td>
			    <td> {{$usuario->email}} </td>
			    <td> {{$usuario->usuario}} </td>
			    <td> {{$usuario->password}} </td>
			   </tr>
			</table>


@endsection