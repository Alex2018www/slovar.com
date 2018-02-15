<html>
<head>
<title>Словотвор</title>
<link rel="stylesheet" type="text/css" href="styleIndex.css">
<meta http-equiv="content-type" content="text/html" charset="utf-8">
</head>
<body>
<script src="qwe.js"></script>
<script src="peredacaDannih.js"></script>

<div id="zagolovok">
<h1><center>Словотвор</center></h1>
</div>

<div id="content">
	<form method="post" action="analizator.py"> 
<strong>Введите слово:</strong><br>
<textarea id="vhod_slova" cols="40" rows="20" placeholder="Каждое слово с новой строки"></textarea>&nbsp;&nbsp;&nbsp;
<textarea id="ish_slova" cols="40" rows="20" readonly placeholder="Тут будут появляться измененные слова"></textarea>
<br>
<input name="otpr_slova" type="submit" value="Отправить">
	</form>
</div>

<div id="tehhpodderzka">При возникновении проблеммы напишите пожалуйста в техподдержку<br>
<a href="support.php">Написать в техподдержку </a>
</div>

<div id="comentarii">
	<form name="comentarii" action="nastrComment.php" type="post">
	<div id='yvidomlenie'></div>
<label> Ваше имя: <input id="name" type="text" size="30" maxlength="50"></label>
<label>Сгенерировать автоматически <input id="generator" type="checkbox" value="1"></label><br><br>
<textarea id="coment" cols="80" rows="5" placeholder="Ваш коментарий"></textarea><br><br>
<input type="submit" value="Отправить"><br><br>
	</form>
<?php 
include("comentarii.php"); 
foreach($coment as $comentariy){
	echo $comentariy;
}

?>
</div>

</body>
</html>
