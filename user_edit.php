<?php session_start();?>
<?php
	include('connectdb.php');
	if ($_POST['id'] == 1) {
		echo 'Вам запрещено выполнять это действие';
		echo '<meta http-equiv="refresh"; content="2; url=table.php" />';
		} else {
	if ($_POST['id'] == 0) {
		//Новый пользователь
		$sql = 'INSERT INTO users (fio,user,pass,role_id) values (' . $_POST['fio'] . ',' . $_POST['login'] . ',' . $_POST['passwd'] . ',' . $_POST['role_id'];
		mysql_query($sql);
	} else {
		//Редактирование существующего пользователя
		$sql = 'UPDATE users SET fio = ' . $_POST['fio'] . ', user = ' . $_POST['login'] . ', pass = ' . $_POST['passwd'] . ', role_id = ' . $_POST['role_id'] . ' WHERE id = ' . $_POST['id'];
		mysql_query($sql);
	};
	};
	echo '<meta http-equiv="refresh"; content="0; url=table.php" />';
?>
