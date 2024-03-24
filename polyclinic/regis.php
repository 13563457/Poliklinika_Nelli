<?php 
include 'template/data.php';

if (!empty($_POST)) 
var_dump ($_POST);
{
  $name=$_POST['name'];
  $family=$_POST['family'];
  $login=$_POST['login'];
  $password=$_POST['password'];
  $sql="INSERT INTO users (name, family, login, password) VALUE ('$name', '$family', '$login', '$password')";
  $result = $mysqli->query($sql);
  
  //header ("Location: lichka.php");
}
?>	