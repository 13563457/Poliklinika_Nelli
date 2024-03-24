<?php 
include 'template/head.php'; 
include 'template/nav.php'; 
include 'template/data.php';
?>
<main>  
  <h1 class="stl1">УСЛУГИ</h1>
      <section id="doctor">
          <div class="row">
           <div class="col-lg-2"> </div>
           <div class="card col-lg-8" >
            <table class="table">
              <tr>
                <th>Изображение</th>
                <th>Название услуги</th>
                <th>Врачи, предоставляющие услугу</th>
              </tr>           
               <?php
                 $result= $mysqli->query('SELECT * FROM uslugi');
                 foreach( $result as $row)   //для каждой строки результата $row  в цикле повторим
                 {
                  echo '<tr><td><img src="images/'.$row['img'].'"></td>
                        <td>'.$row['name_uslugi'].'</td>
                        <td>'.$row['vrach'].'</td></tr>';
                 }
                 $result->free(); //освободить память, занятую результатом
                 $mysqli->close(); //закрыть соединение с БД
               ?>
            </table>
           </div>
          <div class="col-lg-2"> </div>
        </div> 
    </section>
</main> 
<?php 
include 'template/footer.php'; 
?>