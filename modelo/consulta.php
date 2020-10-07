<?php

 include 'conexion.php';
  
 function listausuario(){
 $sql="SELECT * FROM usuario;";      
 $stmt = conectar()->prepare($sql); 
 $stmt->execute();
 $array=$stmt->fetchAll(PDO::FETCH_ASSOC);
 $stmt=null;  
 return $array;     
}

function guardarUsuario($numid,$nombre,$apellido){
 
   $mensaje="";
try {
    $sql="INSERT INTO usuario VALUES (:numid,:nombre,:apellido);";
  
   $stmt = conectar()->prepare($sql); 
   $stmt->bindParam(":numid", $numid);
   $stmt->bindParam(":nombre", $nombre);
   $stmt->bindParam(":apellido", $apellido);
   $stmt->execute();
   $fila=$stmt->rowCount();     
   $mensaje="Guardo, Proyecto con Exito!!!!";       
        
} catch(PDOException $e) {
  
     if ($e->errorInfo[1] == 1062) {
   $mensaje="registro ya existe!!";
       // duplicate entry, do something else
    } else {
       // an error other than duplicate entry occurred
     $mensaje="Problema en la Base de Datos";
    }

 
}
  return $mensaje;

}


function actualizarUsuario($numid,$nombre,$apellido){
 
   $mensaje="";
try {
    $sql="update usuario set nombre=:nombre,apellido=:apellido where numid=:numid";
  
   $stmt = conectar()->prepare($sql); 
   $stmt->bindParam(":numid", $numid);
   $stmt->bindParam(":nombre", $nombre);
   $stmt->bindParam(":apellido", $apellido);
   $stmt->execute();
   $fila=$stmt->rowCount();     
   $mensaje="Guardo, Proyecto con Exito!!!!";       
        
} catch(PDOException $e) {
  
     if ($e->errorInfo[1] == 1062) {
   $mensaje="registro ya existe!!";
       // duplicate entry, do something else
    } else {
       // an error other than duplicate entry occurred
     $mensaje="Problema en la Base de Datos";
    }
 
}
  return $mensaje;

}

function eliminarUsuario($numid){
 
 
    $sql="delete from usuario where numid=:numid;";
  
   $stmt = conectar()->prepare($sql); 
   $stmt->bindParam(":numid", $numid);
   $stmt->execute();
  
}