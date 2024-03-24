<?php 
include 'template/head.php'; 
include 'template/nav.php'; 
include 'template/data.php';
?>
<main>  
    <h2 class="stl1">АМБУЛАТОРНАЯ КАРТА ДЛЯ ПЕРВИЧНЫХ ПАЦИЕНТОВ</h2>
      <section id="karta">
        <div class="row">
         <div class="col-lg-2"></div> 
          <div class="card col-lg-8" >
          <form action="kart.php" method="POST">
          <div class="mb-3">
             <label for="exampleInputKarta" class="form-label">№ карты</label>
             <input type="name" class="form-control" name="nomer" id="exampleInputKarta">
            </div>
            <div class="mb-3">
             <label for="exampleInputFio" class="form-label">ФИО</label>
             <input type="name" class="form-control" name="fio" id="exampleInputFio">
            </div>
            <div class="mb-3">
             <label for="exampleInputDate" class="form-label">Дата рождения</label>
             <input type="name" class="form-control" name="date_roj" id="exampleInputDate">
            </div>
            <div class="mb-3">
             <label for="exampleInputPol" class="form-label">Пол</label>
             <input type="name" class="form-control" name="pol" id="exampleInputPol">
            </div>
            <div class="mb-3">
             <label for="exampleInputPasport" class="form-label">Паспорт</label>
             <input type="name" class="form-control" name="pasport" id="exampleInputPasport">
            </div>
            <div class="mb-3">
             <label for="exampleInputPolis" class="form-label">№ полиса</label>
             <input type="name" class="form-control" name="polis" id="exampleInputPolis">
            </div>
            <div class="mb-3">
             <label for="exampleInputAdres" class="form-label">Адрес</label>
             <input type="name" class="form-control" name="adres" id="exampleInputAdres">
            </div>
            <div class="mb-3">
             <label for="exampleInputPhone1" class="form-label">Телефон</label>
             <input type="phone" class="form-control" name="telephon" id="exampleInputPhone1">
            </div>
            <div class="mb-3">
             <label for="exampleInputGruppa" class="form-label">Группа инвалидности</label>
             <input type="name" class="form-control" name="gruppa" id="exampleInputGruppa">
            </div>
            <div class="mb-3">
             <label for="exampleInputPokaz" class="form-label">Противопоказания(если есть)</label>
             <input type="name" class="form-control" name="protiv" id="exampleInputPokaz">
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