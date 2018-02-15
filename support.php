<html>
<head>
<title>Техподдержка</title>
<link rel="stylesheet" type="text/css" href="styleIndex.css">
<meta http-equiv="content-type" content="text/html" charset="utf-8">
</head>
<body>
<?php
echo "<form method='post'>
<textarea name='problem' cols='80' rows='20' placeholder='Напишите вашу проблемму'></textarea> 
<input type='submit' value='Отправить' name='otpr'>
</form> 
<p><a href='index.php'>Обратно на сайт</a></p>";

$problem = $_POST["problem"];
if($_POST["otpr"]){
	mail("mischenko.alexandr2015@yandex.ru", "Проблемма с сайтом!!", $problem);
}
?>
</body>
</html>