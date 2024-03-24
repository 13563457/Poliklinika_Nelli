<?php 
include 'template/head.php'; 
include 'template/nav.php'; 
include 'template/data.php';
?>
  <main>
      <h1 class="stl1"> ВРАЧИ</h1>
      <section id="doctor">
          <div class="row">
           <div class="col-lg-2"> </div>
           <div class="card col-lg-8" >
            <table class="table">
              <tr>
                <th>ФИО</th>
                <th>Специализация</th>
              </tr>           
               <?php
                 $result= $mysqli->query('SELECT * FROM doctor');
                 foreach( $result as $row)   //для каждой строки результата $row  в цикле повторим
                 {
                  echo '<tr><td>'.$row['name_doctor'].'</td>
                        <td>'.$row['speciaization'].'</td></tr>';
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