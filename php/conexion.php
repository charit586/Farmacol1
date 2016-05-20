<?php

$conex=  mysql_connect("localhost","root","");
if(!$conex){
    echo("error al intentar conectar:".mysql_error());
}
$bd_conex=  mysql_select_db("login",$conex);
if(!$bd_conex){
    echo("error al intentar seleccionar la bd:".mysql_error());
}
?>