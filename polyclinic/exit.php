<?php 
session_start();
unset($_SESSION["id_user"]);
unset($_SESSION["login"]);
unset($_SESSION["role"]);
unset($_SESSION["fio"]);
header ("Location: index.php");
?>
