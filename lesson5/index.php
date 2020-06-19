<?php

$link = mysqli_connect('localhost', 'root', 'root', 'images');

function getGallery($link) {
   $sql = "SELECT * FROM gallery ORDER BY countRating DESC";
   $result = mysqli_query($link, $sql);
   $images ='';
   while ($row = mysqli_fetch_assoc($result)){
   //    $images .= <<<php
   //       <a target="blank" href="gallery/{$row['path']}"><img class ="image" src ="gallery/{$row['path']}"></a>
   // php;
         $images .= <<<php
            <a target="_blank" href="image.php?id={$row['id']}"><img class ="image" src ="gallery/{$row['path']}"></a>
   php;
   }
   return $images;
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
   .image{
      width: 250px;
      height: 200px;
   }
</style>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <?= getGallery($link) ?>
</body>
</html>