@extends ('admin.index')

@section('contenido')  
<h3>Detalles de Boleto</h3>
<table class="table table-condensed table-hover table-bordered text-center" >
		       <tr style="background-color: black; color:white;"> 
		         <th> Serial </th> 
		         <th> Evento </th> 
		         <th> Fecha </th>
		         <th> Ubicacion </th>
		         <th> Usuario </th>
		       </tr> 
		       <tr>
			    <td> {{$boleto->serial}} </td> 
			    <td> {{$boleto->evento}} </td>
			    <td> {{$boleto->fecha}} </td>
			    <td> {{$boleto->ubicacion}} </td>
			    <td> {{$boleto->usuario}} </td>
			   </tr>
			</table>


@endsection