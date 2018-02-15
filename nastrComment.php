<?php
$name = $_POST["name"];
$coment = $_POST["coment"];

file_put_contents("comentarii.php", "\$coment[] = '<strong>$name</strong><p>$coment</p>';\n", FILE_APPEND);
?>