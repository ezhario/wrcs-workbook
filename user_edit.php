<?php session_start();?>
<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Добавление сотрудника (backend) - Тетрадка</title>
</head><body>
<?php
	include('connectdb.php');
	if ($_POST['id'] == 1) {
		echo 'Вам запрещено выполнять это действие';
		echo '<meta http-equiv="refresh"; content="2; url=table.php" />';
		} else {
	if ($_POST['id'] == 0) {
		$sql = "INSERT INTO users (fio, user, pass, role_id) VALUES ('" . $_POST[fio] . "', '" . $_POST[login] . "', '" . $_POST[passwd] . "', '" . $_POST[role_id] . "')";
		if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

	} else {
		$sql = 'UPDATE users SET fio = ' . $_POST["fio"] . ', user = ' . $_POST["login"] . ', pass = ' . $_POST["passwd"] . ', role_id = ' . $_POST["role_id"] . ' WHERE id = ' . $_POST["id"];
		echo $sql;
	};
	};
//	echo '<meta http-equiv="refresh"; content="0; url=table.php" />';
	//Новый пользователь
//		$sql = 'INSERT INTO users (fio, user, pass, role_id) VALUES (' . $_POST["fio"] . ', ' . $_POST["login"] . ', ' . $_POST["passwd"] . ', ' . $_POST["role_id"] . ')';
	//	mysql_query($sql);
	
	//Редактирование существующего пользователя
//		$sql = 'UPDATE users SET fio = ' . $_POST["fio"] . ', user = ' . $_POST["login"] . ', pass = ' . $_POST["passwd"] . ', role_id = ' . $_POST["role_id"] . ' WHERE id = ' . $_POST["id"];
	//	mysql_query($sql);
?>
</body>
</html>