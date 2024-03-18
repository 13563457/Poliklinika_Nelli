<?php
//выполним соединение с БД
$mysqli=new mysqli ('localhost', 'root', '','');
//установим кодировку БД
$mysqli->set_charset('utf8');
?> 