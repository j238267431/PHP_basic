<?php

$link = mysqli_connect('localhost', 'root', 'root', 'images');

function getImageById($link){
   if (!empty($_GET['id'])) {
      $id = (int)$_GET['id'];
      $sqlImage = "SELECT * FROM gallery WHERE id = $id";   
      $res = mysqli_query($link, $sqlImage);
      $data = mysqli_fetch_assoc($res);

      countRate($link, $id);
      
      return <<<php
         <img src="gallery/{$data['path']}">
         <h1>количество просмотров {$data['countRating']}</h1>
      php;
   
      };
}

      function countRate($link, $id) {
         $sql = "UPDATE gallery SET countRating = countRating + 1 WHERE id = $id";
         mysqli_query($link, $sql);
      }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>

</style>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <?= getImageById($link)?>
</body>
</html>