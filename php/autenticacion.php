<?php

require_once 'conexion.php';

session_start();

$_SESSION['usuario'] = "anonimo";
$_SESSION['valido'] = 0;

if (isset($_POST['usuario']) && isset($_POST['contra1'])) {
    $cadena = "324@ 52#QMFe3E222%%";
    $contrase = $_POST['contra1'];
    $hash = $cadena . sha1($contrase);
    $usu=  split(" ",trim($_POST['usuario']));
    $_SESSION['usuario'] =$usu[0];
    $result=  mysql_query("select contrase from usuario where usuario='".$_SESSION['usuario']."'");
    
    if(mysql_num_rows($result)==1){
        $row=  mysql_fetch_row($result);
        if($hash==$row[0])
            ($_SESSION['valido']=1);
            
        
           
    }
}
header("location:servicios.php");
exit();
?>