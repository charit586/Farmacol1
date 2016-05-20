<?php

ssesion_star();
session_destroy();

header("location:acceso.php");
exit();
?>