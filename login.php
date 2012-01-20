<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Процесс входа в систему - Тетрадка</title>
</head>
<body>
<?php
if (isset($_POST['user']) && isset($_POST['pass']))
{
	include('connectdb.php');
    //$login = mysql_real_escape_string($_POST['user']);
    //$password = $_POST['pass'];

    // делаем запрос к БД
    // и ищем юзера с таким логином и паролем

    //$query = 'SELECT id FROM users WHERE user=`' . $login . '` AND pass=`' . $password . '` LIMIT 1';
    //$sql = mysql_query($query) or die(mysql_error());
	// если такой пользователь нашелся
    //if (mysql_num_rows($sql) == 1) {
        // то мы ставим об этом метку в сессии (допустим мы будем ставить ID пользователя)
        //$row = mysql_fetch_assoc($sql);
        //$_SESSION['user_id'] = $row['id'];
        // не забываем, что для работы с сессионными данными, у нас в каждом скрипте должно присутствовать session_start();
		//echo 'Добро пожаловать пользователь ' . $_POST['User'] . '!' . '<br>';
		//echo '<meta http-equiv="refresh"; content="1; url=http://KIS.ru/Workers.php">';
    //}
    //else {
    //    echo 'Не верно введен пользователь или пароль.<br>';
		//echo "<meta http-equiv='refresh'; content='1; url=http://KIS.ru'>";
   // };
}
else
	{
	echo 'Не верно введен пользователь или пароль.<br>';
	//echo "<meta http-equiv='refresh'; content='1; url=http://KIS.ru'>";
};
?>
</body>
</html>