<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema de Boletos</title>
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

	<style>
		html {
  position: relative;
  min-height: 100%;
}
body {
  /* Margin bottom by footer height */
  margin-bottom: 60px;
}
.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 60px;
  line-height: 60px; /* Vertically center the text there */
  background-color: lightGray;
}	
	</style>
</head>
	<body style="background-color: lightGray;">
    
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      	<a class="navbar-brand" href="index"><strong>Sistema de Boletos de Eventos</strong></a>

          

      
          <div class="form-group">
             <a href="../../../../../Proyecto/SistemaBoletos/public"><button type="submit" class ="btn btn-primary" style="float:right; margin-left: 100%;">Log out</button></a>
          </div>
      
        
          
      
  
    </nav>


    <main role="main" class="container" >
      
      @yield('contenido')

	
    </main>
	      <!-- FOOTER -->
     <footer class="footer">
		<div class="container">
      <img src="{{ asset('images/ecorp.png') }}" width="50" height="50" style="opacity: 0.5;">
			<strong>Copyright &copy; 2017 <a href="#">M&J</a>.</strong> All rights reserved.
		</div>
      </footer> 
	<script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
	</body>
</html>