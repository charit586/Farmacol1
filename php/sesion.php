<?php

session_start();
if($_SESSION['valido']!=1){
    header("location:login.php");
    exit();
}