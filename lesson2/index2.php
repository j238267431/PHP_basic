<?php
// задание 5

$html = file_get_contents('main.html');
$html = str_replace('CURRENTYEAR', date('Y'), $html);
echo $html;
?>
