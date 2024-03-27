
<?php 
include 'template/head.php'; 
include 'template/nav.php'; 
include 'template/data.php';
?>

<div class="container">
<div class="row">
<div class="col-12">
<h1 class="stl1">КАБИНЕТ ВРАЧА</h1>
</div>
</div>
<div class="row">
<div class="col-1"></div>

<div class="col-3">
<a href="karta.php">
<button type="button" class="btn btn-danger">ПРОСМОТРЕТЬ ЗАПИСАННЫХ<br> ПАЦИЕНТОВ </button>
</a>
</div>

<div class="col-4">
<a href="talon.php">
<button type="button" class="btn btn-danger">ПРОСМОТРЕТЬ ТИТУЛЬНЫЙ ЛИСТ<br> В АМБУЛАТОРНОЙ КАРТЕ</button>
</a>
</div>

<div class="col-3">
<a href="talon.php">
<button type="button" class="btn btn-danger">ПРОСМОТРЕТЬ ИСТОРИИ<br> БОЛЕЗНИ</button>
</a>
</div>

<div class="col-1"></div> 
</div>
</div><br>

<?php 
include 'template/footer.php'; 
?>