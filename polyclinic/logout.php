<?php 
include 'template/head.php'; 
include 'template/nav.php'; 
include 'template/data.php';

unset($_POST['usersname']);
session_start();
if(!empty($_POST['id_user']))
    {
        echo '<li class="nav-item"><a class="nav-link" href="login.php">Войти</a></li>';
    }
include "template/footer.php";
?>
