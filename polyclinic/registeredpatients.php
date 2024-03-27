<?php 
include 'template/head.php';  
include 'template/nav.php'; 
include 'template/data.php'; 
?>  
<main>
  
<h2 class="stl1">ПРОСМОТР ЗАПИСАННЫХ ПАЦИЕНТОВ</h2>
      <section id="talon">
        <div class="row">
         <div class="col-lg-1"></div> 
          <div class="card col-lg-10" >
            <table class="table">
              <tr>
			  <th>№ медицинской карты</th>
			  <th>ФИО врача</th>
                <th>Специальность врача</th>
                <th>Время приёма</th>

              </tr>           
               <?php
                 $result=$mysqli->query('SELECT * FROM tal');
                 foreach( $result as $row)   //для каждой строки результата $row  в цикле повторим
                 {
                  echo '<tr>
                        <td>'.$row['nomer'].'</td>    
                        <td>'.$row['fio'].'</td>
                        <td>'.$row['spec'].'</td>
                        <td>'.$row['vremya'].'</td>
                        </tr>';
                 }
                 $result->free(); //освободить память, занятую результатом
                 $mysqli->close(); //закрыть соединение с БД
               ?>
            </table>
          </div>
          <div class="col-lg-1"></div>
        </div>
      </section>
</main>
<?php 
include 'template/footer.php'; 
?>