<?php
//сервер, пользователь, пароль и имя баpы mysql
$db_host = 'localhost';
$db_user = 'tetra_user';
$db_pass = 'soe85gyso';
$db_name = 'tetrad';
 
// подключаемся и выбираем бд, которую указали выше
if(!mysql_connect($db_host,$db_user,$db_pass))
  die('Ошибка подключения к MySQL. Проверьте connectdb.php!');
elseif(!mysql_select_db($db_name))
  die('Не удалось выбрать базу данных, проверьте connectdb.php!');
?>