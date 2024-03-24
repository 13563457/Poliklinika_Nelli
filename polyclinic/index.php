<?php 
include 'template/head.php'; 
include 'template/nav.php'; 
include 'template/data.php';
?>
<main>
  <section id="banner">
    <div class="row">
      <div class="col-lg-12">
        <div class="poli">
          <h1 class="stl">МЫ ПОМОЖЕМ ВАМ <br> БЫТЬ ЗДОРОВЫМИ!</h1>
          <p>КАЧЕСТВЕННАЯ ДИАГНОСТИКА <br> ВСЕ ВИДЫ ОБСЛЕДОВАНИЙ <br> ЛЕЧЕНИЕ У ЛУЧШИХ СПЕЦИАЛИСТОВ  </p>  
        </div>
      <div>
    <div>
  </section>
  
  <section id="advantages">
    <div class="row">
      <div class="col-lg-12">
          <h1 class="stl1">НАШИ ПРЕИМУЩЕСТВА</h1><br>
          <div class="row">
          <div class="col-lg-2"></div>  
          <div class="col-lg-2">
           <img src="images/icon1.png" width="130px">
           <p>Профессионализм</p>  
          </div>
          <div class="col-lg-2">
           <img src="images/icon2.png" width="130px">  
           <p>Высокий уровень обслуживания</p>  
          </div>
          <div class="col-lg-2">
           <img src="images/icon3.png" width="130px">
           <p>Современная <br> лаборатория</p> 
          </div>
          <div class="col-lg-2">
           <img src="images/icon4.png" width="130px">
           <p>Многопрофильная поликлиника</p> 
          </div>
          <div class="col-lg-2"></div> 
        </div>
        </div>
       </div>
      <div>
    <div>
  </section>

  <section id="outpatientcard">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="stl2">ОФОРМИТЕ АМБУЛАТОРНУЮ КАРТУ <br> ПРЯМО СЕЙЧАС</h1>
        <div class="but1">
        <a href="karta.php">
           <button type="button" class="btn btn-danger">ОФОРМИТЬ</button>
        </a>
        <div>
          <h1 class="stl3">УЖЕ ЕСТЬ АМБУЛАТОРНАЯ КАРТА? <br> ПОЛУЧИТЕ ТАЛОН</h1>
          <div class="but2">
          <a href="talon.php">
            <button type="button" class="btn btn-danger">ПОЛУЧИТЬ ТАЛОН</button>
          </a>
          <div> <br>
          <p><b>НАШЕ ОБСЛУЖИВАНИЕ САМОЕ БЫСТРОЕ!</b></p>
      <div>
    <div>
  </section>

      <section id="form">
        <br>
  <h2 class="stl1">ОСТАВЬТЕ СВОЙ ОТЗЫВ <br> ПРО НАШУ ПОЛИКЛИНИКУ</h2> 
        <div class="row">
         <div class="col-lg-2"></div>
          <div class="col-lg-4">
           <img src="images/photo1.png" width="330px" height="330px">
          </div>
          <div class="col-lg-4">
           <form action="message.php" method="POST">
            <div class="mb-3">
             <label for="exampleFormControlTextarea1" class="form-label">Введите сообщение</label>
             <textarea class="form-control" name="mess" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-3">
             <label for="exampleInputName1" class="form-label">Ваше имя</label>
             <input type="name" class="form-control" name="imya" id="exampleInputName1">
            </div>
            <div class="mb-3">
             <label for="exampleInputPhone1" class="form-label">Ваш номер телефона</label>
             <input type="trl" class="form-control" name="tele" id="exampleInputPhone1">
            </div>
            <button type="submit" class="btn btn-danger">Отправить</button>
           </form>
          </div>
          <div class="col-lg-2"></div>
        </div>
      </section>
</main>
<?php 
include 'template/footer.php'; 
?>
