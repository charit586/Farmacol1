<?php

include 'conexion.php';
 
if (isset($_POST['usuario']) && isset($_POST['contra1'])) {
    $usuario = $_POST['usuario'];
    $contrase = $_POST['contra1'];
    $cadena = "324@ 52#QMFe3E222%%";
    $hash = $cadena.sha1($contrase);
    
  mysql_query("insert into usuario(usuario,contrase)values('$usuario','$hash');",$conex);
   $my_error=  mysql_error($conex);
  if(!empty($my_error))
  {
      echo "ha habido un error en insertar los valores.$my_error";
      
  }else{
      echo"los datos han sido introducidos correctamente";
  }
}
header("location:login.php");
?>