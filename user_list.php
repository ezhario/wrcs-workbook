<?php header("Content-Type: text/html; charset=utf-8");
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Сотрудники</title>
        <style type="text/css">
            .cf {clear: both; float: none}
            .row {width: 1000px}
            .row div {float: left; border: 1px solid #000; margin: 1px; text-align: center}
            .id {width: 20px;}
            .fio {width: 400px}
            .login {width: 100px}
            .password {width: 100px}
            .role {width: 200px}
            .edit {border: none}
        </style>
    </head>
    <body>
        <div class="row">
            <?php
            include('connectdb.php');
            if (isset($_SESSION['user_id']) == true) {
                $result = mysql_query('SELECT * FROM users LIMIT 0,30') or die(mysql_error());
                while ($row = mysql_fetch_assoc($result)) {
                    echo '<div class="id">' . $row['id'] . '</div>';
                    echo '<div class="fio">' . $row['fio'] . '</div>';
                    if (isset($row['user']) == false) {
                        echo '<div class="login">Не указан</div>';
                    } else {
                        echo '<div class="login">Указан</div>';
                    }
                    if (isset($row['pass']) == false) {
                        echo '<div class="password">Не указан</div>';
                    } else {
                        echo '<div class="password">Указан</div>';
                    }
                    if ($row['role_id'] > 2) {
                        if ($row['role_id'] > 3) {
                            echo '<div class="role">Сотрудник</div>';
                        } else {
                            echo '<div class="role">Оператор СКРД</div>';
                        }
                    } else {
                        if ($row['role_id'] > 1) {
                            echo '<div class="role">Директор</div>';
                        } else {
                            echo '<div class="role">Администратор СКРД</div>';
                        }
                    }
                if ($_SESSION['role_id'] <= 2) {echo '<div class="edit"><input type="button" onclick="location.href=\'user_add.php?id=' . $row['id'] .'\'" value="Редактировать" /></div>';
                echo '<div class="edit"><input type="button" onclick="location.href=\'gen_code.php?id='.$row['id'].'&fio='.$row['fio'].'\'" value="Распечатать карточку" /></div>';
                }
                echo '<br class="cf" />';}
            }
            ?>
        </div>
    </body>
</html>