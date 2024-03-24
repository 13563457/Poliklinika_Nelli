<?php 
include 'template/head.php'; 
include 'template/nav.php'; 
include 'template/data.php';
?>
<main>
    <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
      <h1 class="name">Регистрация</h1>
      <form action="regis.php" method="POST"> 
      <div class="mb-3">
    <label for="exampleInputName" class="form-label">Имя</label>
    <input type="name" class="form-control" name="name" id="exampleInputName" >
  </div>
  <div class="mb-3">
    <label for="exampleInputFamily" class="form-label">Фамилия</label>
    <input type="family" class="form-control" name="family" id="exampleInputFamily" >
  </div>
  <div class="mb-3">
    <label for="exampleInputLogin" class="form-label">Логин</label>
    <input type="login" class="form-control" name="login" id="exampleInputLogin" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Пароль</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" >
  </div>
  <button type="submit" class="btn btn-danger">Зарегистрироваться</button>
</form>      
      </div> 
      <div class="col-lg-3"></div> 
</main>
<?php 
include 'template/footer.php'; 
?>