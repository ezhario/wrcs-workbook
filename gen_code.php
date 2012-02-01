<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Сгенерированный штрих-код</title>
</head>
<?php
	include('connectdb.php');
	if (isset($_POST['fio'])) {
		?>
<body>
<div style="height:55mm; width:95mm; border:1px solid #000; text-align:center">
<h1>ПМП &laquo;Визит&raquo;</h1>
<strong><?php echo ($_POST['fio']); ?></strong><br />
Идентификатор: <?php echo ($_POST['id']); ?><br /><br />

<?php 
$true_string = $_POST['fio'] . $_POST['id'];
	$md_string = md5($true_string);
	$string = preg_replace("/[^0-9\s]/", "", $md_string);
	$short_string = substr($string,0,11);
	function ean13($bar)
{
    $control_sum = getSum('0'.$bar);
    $bar.=$control_sum;
    $result = "";
    $table_a = array('A','B','C','D','E','F','G','H','I','J');     
    $table_c = array('a','b','c','d','e','f','g','h','i','j');
    $result.='!';
    for ($i=0;$i<6;$i++)
    {
        $result.=$bar[$i];        
    }
    //$result.=chr(42);
    $result.='-';
    for ($i=6;$i<12;$i++)
    {
        $result.=$table_c[$bar[$i]];        
    }
    $result.='!';
    return $result;
}
  function getSum($bar)
  {
    for($i=0;$i<strlen($bar);$i++)
    {
        if($i % 2 === 0)
        {
           $nechet+=(int)$bar[$i]; 
        }
        else 
        {
           $chet+=(int)$bar[$i];  
        }
    }   
    $sum = 3*$chet+$nechet;
    if($sum % 10 === 0 )
    return 0;
    else
    return 10 - ($sum % 10);
  }
  $code = ean13($short_string);
	echo '<img src="image_create.php?text=' . $code . '" />';
	} else {
		echo 'Вам запрещено выполнять это действие';
		echo '<meta http-equiv="refresh"; content="2; url=table.php" />';
	}

?>
</div>
</body>
</html>