<?php 
include 'template/head.php'; 
include 'template/nav.php'; 
include 'template/data.php';
if(!empty($_POST["password"]) and !empty($_POST["login"]))
{
    $login = $_POST["login"];
    $password = $_POST["password"];

    $sql = "select * from users where login='$login' and password='$password'"; //в переменную записали строку
    $result = $mysqli->query($sql); //выполнили строку и записали в result это объект
    $user = mysqli_fetch_assoc($result); // результат преобразовываем в массив

    if(!empty($user)){
        session_start();
        $_SESSION['id_user'] = $user["id_user"];
        $_SESSION['login'] = $user["login"];
        $_SESSION['role'] = $user["role"];
        $_SESSION['fio'] = $user["fio"];
        header("location: index.php");
    }
    else{
        echo 'Неверный логин или пароль';
    }
}
?>
<main>
    <div class="container mb-5">
        <div class="row">
        <h1>Личный кабинет</h1>
    <form action="login.php" method="POST">
    <div class = "mb-3">
        <label for = "name" class="form-label" id = "name">Имя пользователя</label>
        <input type = "name" class="form-control" reqired  id = "name" name="name">
    </div>
    <div class = "mb-3">
        <label for = "family" class="form-label" id = "family">Фамилия</label>
        <input type = "family" class="form-control" reqired id = "family" name="family">
    </div>
    <div class = "mb-3">
        <label for="login" class="form-label" id="login">Логин</label>
        <input type="login" class="form-control" reqired name="login" id="login">
    </div>
    <div class = "mb-3">
        <label for="password" class="form-label" id="password">Пароль</label>
        <input type="password" class="form-control" reqired name="password" id="password">
    </div>

    </div>
    <div class = "mb-3">
        <button type="submit" class="btn btn-danger" href="index.php">Войти</button>
        </div>
    </div>
    </form>
    </div>
    </main>
<?php include 'template/footer.php'; ?>