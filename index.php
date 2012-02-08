<?php header("Content-Type: text/html; charset=utf-8"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Вход в систему - Тетрадка</title>
    </head>
    <?php
    include('connectdb.php'); // подключение к серверу MySql и выбор БД
    $sql = 'SELECT user FROM users order by id';
    $res = mysql_query($sql);
    ?>
    <body style="margin:0px; padding: 0px;">
        <form action="login.php" method="post" name="autorize">
            Логин:
            <select name="user">
                <?php
                while ($usr = mysql_fetch_array($res, MYSQL_NUM)) {
                    echo '<option value="' . $usr[0] . '">' . $usr[0];
                }
                mysql_free_result($res);
                ?>
            </select><br>
                Пароль:
                <input type="password" width="10" name="pass">
                    <input type="submit" value="Вход">
                        </form>
                        </body>
                        </html>