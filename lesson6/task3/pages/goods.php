<?php

require_once dirname(__DIR__) . '/engine/lib.php';

$sql = "SELECT * FROM goods";
$result = mysqli_query($link, $sql);
$goods = '';

while ($row = mysqli_fetch_assoc($result)){
   $goods .= <<<php
   <div>
   <a href="?page=3&id={$row['id']}"><img class="goods" src="img/{$row['img']}"></a>
   <a href="?page=3&id={$row['id']}"><h3>{$row['name']}</h3></a>
   <a href="?page=4&id={$row['id']}&name={$row['name']}">оставить отзыв</a>
   </div>
php;
}

echo $goods;
