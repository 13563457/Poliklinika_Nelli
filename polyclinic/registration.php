<?php 
include 'template/head.php'; 
include 'template/nav.php'; 
include 'template/data.php';
?>
<div class="container">
<div class="row">
<div class="col-12">
<h1 class="stl1">РЕГИСТРАТУРА</h1>
</div>
</div>
<div class="row">
<div class="col-1"></div>

<div class="col-5">
<a href="karta.php">
<button type="button" class="btn btn-danger">АМБУЛАТОРНЫЕ КАРТЫ ПАЦИЕНТОВ</button>
</a>
</div>

<div class="col-5">
<a href="talon.php">
<button type="button" class="btn btn-danger">ВЫДАЧА АМБУЛАТОРНОГО ТАЛОНА </button>
</a>
</div>

<div class="col-1"></div> 
</div>
</div>
<?php 
include 'template/footer.php'; 
?>