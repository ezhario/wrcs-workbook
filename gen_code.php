<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Сгенерированный штрих-код</title>
</head>
<?php
	include('connectdb.php');
		?>
<body>
ФИО: <?php echo ($_POST['fio']); ?><br />
Идентификатор: <?php echo ($_POST['id']); ?>
<?php 
	$string = md5($_POST['fio']);
	$string = preg_replace("/[^0-9\s]/", "", $string);
	echo ($string);
?>
</body>
</html>