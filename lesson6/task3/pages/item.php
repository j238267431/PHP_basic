<?php
require_once dirname(__DIR__) . '/engine/lib.php';
$html = file_get_contents(dirname(__DIR__) . '/tmpl/item.html');
$goods_id = (int)$_GET['id']; 
$sql = "SELECT * FROM comments WHERE goods_id = $goods_id";
$result = mysqli_query($link, $sql);
$commentsList = '';
while ($row = mysqli_fetch_assoc($result)){
   $commentsList .= '<p>' . $row['comment'] . '</p>';
}

$sql = "SELECT * FROM goods WHERE id = $goods_id";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$img = "img/" . $row['img'];
$info = $row['info'];
$itemContent = <<<HTML
   <img style="width: 250px; height: 250px;" src="{$img}">
   <p>{$name}</p>
   <p>$info</p>
HTML;

echo str_replace(['{{COMMENT}}','{{ITEM}}'],[$commentsList, $itemContent], $html);
