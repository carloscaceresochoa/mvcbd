
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body{

  		margin-top: 2%;
  		margin-bottom: 2%;
  	}
  </style>	
</head>
<body>
<div class="container">	

<div class="jumbotron">	
<form action="mostrardb.php?op=2" method="post">
	<center><h2>Entrada de Datos</h2></center>
<label>Numero de Id</label>
<input id="numid" type="text" name="numid" class="form-control"><br>
<label>Nombre</label>
<input id="nombre" type="text" name="nombre" class="form-control"><br>
<label>Apellido</label>
<input id="apellido" type="text" name="apellido" class="form-control"><br>
<center><button id="boton" class="btn btn-primary" type="submit">Editar</button></center>

</form>
</div>

</div>

<br>
	<center><a class="btn btn-info" href="mostrardb.php">Atras</a></center>
	
<script>

	mostrar();

function mostrar(){
     const numidtext=document.querySelector("#numid");
	 const nombretext=document.querySelector("#nombre");
     const apellidotext=document.querySelector("#apellido");
     const boton=document.querySelector("#boton");
     numidtext.value=localStorage.getItem("numid");
     nombretext.value=localStorage.getItem("nombre"); 
     apellidotext.value=localStorage.getItem("apellido");

     
     

     boton.value="Editar";



}		
	</script>

</body>
</html>
