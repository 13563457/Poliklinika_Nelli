<header>
  <div class="row">
      <div class="col-lg-2">
       </div>
          <div class="col-lg-8">
            <nav class="navbar navbar-expand-lg">
              <div class="container-fluid justify-content-center ">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Переключатель навигации">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-grow-0" id="navbarNav">
                  <div class="menu">
                    <ul class="navbar-nav ">
                      <li class="nav-item">
                        <a class="nav-link active" href="index.php"><b>ГЛАВНАЯ</b></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="contacts.php""><b>КОНТАКТЫ</b></a>
                      </li>
                    </ul>
                  </div>
                </div>
               </div>
            </nav>
          </div>
          <?php
                      session_start();
                      if ($_SESSION['role'] == "1") {
                        echo '<div class="col-lg-2"><a class="nav-link" href="director.php" style="color:rgb(243, 13, 120);">Личный кабинет Руководителя</a>
                        <a class="nav-link" href="exit.php" style="color:rgb(243, 13, 120);">Выйти</a></div>';
                      } 
                      elseif ($_SESSION['role'] == "2") {
                        echo '<div class="col-lg-2"><a class="nav-link" href=".php" style="color:rgb(243, 13, 120);">Личный кабинет Менеджера</a>
                        <a class="nav-link" href="exit.php" style="color:rgb(243, 13, 120);">Выйти</a></div>';
                      }
                      elseif ($_SESSION['role'] == "3") {
                        echo '<div class="col-lg-2"><a class="nav-link" href=".php" style="color:rgb(243, 13, 120);">Личный кабинет Администратора</a>
                        <a class="nav-link" href="exit.php" style="color:rgb(243, 13, 120);">Выйти</a></div>';
                      }
                      elseif ($_SESSION['role'] == "0") {
                        echo '<div class="col-lg-2"><a class="nav-link" href="peraccount.php" style="color:rgb(243, 13, 120);">Личный кабинет Пользователя</a>
                        <a class="nav-link" href="exit.php" style="color:rgb(243, 13, 120);">Выйти</a></div>';
                      }
                      else {
                        echo '<div class="col-lg-2"> 
                       <div class="phone">
                        <p>Запишесь на приём прямо сейчас: </p>
                        <p class="numb"><b> 8 (342)274-55-55</b></p>
                      </div>
                    </div>';
                      }
                      ?>
</header> 