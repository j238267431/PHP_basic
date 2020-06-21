<?php
require_once dirname(__DIR__) . '/engine/lib.php';
$html = file_get_contents(dirname(__DIR__) . '/tmpl/form.html');
$name = $_GET['name'];
$text = 'напишите отзыв';
submitTheForm($link, $text);
echo str_replace(['{{NA}}', '{{FEEDBACK}}'], [$name, $text], $html);




