<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Добавление сотрудника - Тетрадка</title>
<script type="text/javascript">
	function checkFio() {
	var f = document.forms["user_edit"]["fio"].value;
	if (f == null || f == "")  {
	  alert("Пожалуйста, введите фамилию, имя и отчество сотрудника.");
	  return false;
	  }
	}
</script>

</head>
<?php
	include('connectdb.php');
	if (isset($_SESSION['user_id']) == true) {
		$id = $_GET['id'];
		$sql = 'SELECT * FROM users where id = ' . $id;
		$res = mysql_query($sql);
		$usr = mysql_fetch_array($res, MYSQL_NUM);
?>
<body style="margin:0px; padding: 0px;">
<form action="user_edit.php" method="post" name="user_edit" onsubmit="return checkFio()">
				<input type="hidden" name="id" value="<?php echo $id ?>">
						<?php
							if ($Id == 0) {
								echo '<h2>Новый сотрудник</h2>';
							} else {
								echo '<h2>Редактирование данных сотрудника</h2>';
							};
						?>
						ФИО:<br>
						<INPUT TYPE="text" NAME="FIO" SIZE="30" MAXLENGTH="100" value="<?php echo $usr[1] ?>">
						Паспортные данные:<br>
						<INPUT TYPE="text" NAME="Pasport" SIZE="30" MAXLENGTH="100" value="<?php echo $usr[2] ?>">
						Адрес:<br>
						<INPUT TYPE="text" NAME="Addr" SIZE="30" MAXLENGTH="100" value="<?php echo $usr[3] ?>">
						Индекс:<br>
						<INPUT TYPE="text" NAME="Index" SIZE="30" MAXLENGTH="100" value="<?php echo $usr[4] ?>">
						<?php
							if ($id == 0) {
								echo '<input type="submit" value="Добавить сотрудника">';
							} else {
								echo '<input type="submit" value="Сохранить изменения">';
							};
							mysql_free_result($res);
						?>
					</td>
				</tr>
			</table>
			</form>

		</body>
</html>