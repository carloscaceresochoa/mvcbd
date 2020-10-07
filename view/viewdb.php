
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.css">
  


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  	body{

  		margin-bottom: 2%;
  	}

  	table{
  		text-align: center;
  	}

    .paginate_button {
    background-color: lightgrey !important;
    border: 1px solid black;
}
 .paginate_button:hover {
    background-color: lightgrey !important;
    border: 1px solid black;
}

  </style>	
</head>
<body>
<div class="container">	



<div class="jumbotron">	


  <?php

  if(isset($mensaje)){
    if($mensaje!=''){
      ?>

      <div class="alert alert-warning alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Mensaje</strong> <?php echo $mensaje?>
      </div>
        

      <?php
    }
  }
 

  ?>
<form action="mostrardb.php" method="post">
	<center><h2>Entrada de Datos</h2></center>
<label>Numero de Id</label>
<input id="numid" type="text" name="numid" class="form-control"><br>
<label>Nombre</label>
<input id="nombre" type="text" name="nombre" class="form-control"><br>
<label>Apellido</label>
<input id="apellido" type="text" name="apellido" class="form-control"><br>
<center><button id="boton" class="btn btn-primary" type="submit">Guardar</button></center>

</form>

</div>

<?php
  if(sizeof($usuarios)>0){
?>
	<table id="tabla" class="table table-striped">

	 <thead>
	 	<tr><td>Numid</td>
	 	<td>Nombres</td>
	 	<td>Apellido</td>
	 	<td >ACCION</td></tr>

	 </thead>
	 <tbody>




	 	<?php

foreach($usuarios as $row){
echo '<tr><td>'.$row['numid']."</td><td>".$row['nombre']."</td><td>".$row['apellido']."</td><td><button onclick=\"mostrar('".$row['numid']."','".$row['nombre']."','".$row['apellido']."')\" class='btn btn-warning'>Editar</button>&nbsp;<a class='btn btn-danger' href=\"mostrardb.php?op=1&numid=".$row['numid']."\">ELiminar</a></td></tr>";

}


?>

	 </tbody>	


	</table>	

	<?php

	}

	else{

	


		?>

  <div class="alert alert-warning alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Mensaje</strong> No se encontro Registro!!
  </div>
		

	<?php


	}

	?>

	
</div>

<script>


   $(document).ready(function() {
    $('#tabla').dataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );

function mostrar(numid,nombre,apellido){
//alert(numid+" "+nombre+" "´+apellido);

	    console.log("nombre "+numid);
		console.log("apellido "+nombre);
		console.log("apellido "+apellido);
     const numidtext=document.querySelector("#numid");
	 const nombretext=document.querySelector("#nombre");
     const apellidotext=document.querySelector("#apellido");
     const boton=document.querySelector("#boton");
     numidtext.value=numid;
     nombretext.value=nombre;
     apellidotext.value=apellido;
     localStorage.setItem("numid",numid);
     localStorage.setItem("nombre",nombre);     
     localStorage.setItem("apellido",apellido);
     location.href='editview.php';     
    

     boton.value="Editar";



}		
	</script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>

</body>
</html>
