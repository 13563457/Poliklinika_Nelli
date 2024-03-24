<?php 
include 'template/data.php';

if (!empty($_POST)) 
{
  $nomer=$_POST['nomer'];
  $fio=$_POST['fio'];
  $date_roj=$_POST['date_roj'];
  $pol=$_POST['pol'];
  $pasport=$_POST['pasport'];
  $polis=$_POST['polis'];
  $adres=$_POST['adres'];
  $telephon=$_POST['telephon'];
  $gruppa=$_POST['gruppa'];
  $protiv=$_POST['protiv'];
  $sql="INSERT INTO kart (nomer, fio, date_roj, pol, pasport, polis, adres, telephon, gruppa, protiv) VALUE ('$nomer', '$fio', '$date_roj','pol','pasport','polis','adres','telephon','gruppa','protiv')";
  $result = $mysqli->query($sql);
  
  //header ("Location: index.php");
}
?>	