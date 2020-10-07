

<?php
include '../modelo/consulta.php';
$mensaje='';


if(isset($_POST['numid']) & isset($_POST['nombre']) & isset($_POST['apellido'])){
$numid=$_POST['numid'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$mensaje=guardarUsuario($numid,$nombre,$apellido);


}
if(isset($_GET['op'])){

if(isset($_POST['numid']) & isset($_POST['nombre']) & isset($_POST['apellido']) & $_GET['op']==2){
$numid=$_POST['numid'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$mensaje=actualizarUsuario($numid,$nombre,$apellido);


}


if(isset($_GET['numid']) & $_GET['op']==1){
$numid=$_GET['numid'];
eliminarUsuario($numid);

}

}


$usuarios=listausuario();

include '../view/viewdb.php';


