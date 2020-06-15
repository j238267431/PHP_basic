<?php


$dir = "gallery";
$images = array_diff(scandir($dir), array('.', '..','.DS_Store'));

if(!empty($_FILES['img']['name'])){
   $info = "обнаружены ошибки, файл не загружен";
} else {
   $info = '';
};

foreach ($images as $img){
   $number++;
   $gallery .= 
   "<a target=\"_blank\" href=\"gallery/{$img}\">
   <img data-number=\"{$number}\" class=\"image\" src=\"gallery/{$img}\"></img>
   </a>";
   

};
$type = preg_match('/[a-z,а-я]+/ui', $_FILES['img']['type'], $matches);

if ($_FILES['img']['error'] != 2 && $matches[0] == "image"){
   $tmp_name = $_FILES["img"]["tmp_name"];
   $name = basename($_FILES["img"]["name"]);
   move_uploaded_file($tmp_name, "/Applications/MAMP/htdocs/PHP_basic/lesson4/gallery/$name");
   $info = "файл загружен успешно";
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
      .image{
         width: 250px;
         height: 200px;
         margin-left: 10px;
         margin-bottom: 10px;
      }
      .modal{
         /* display: none; */
         width: 100%;
         background: black;
         opacity: 0.6;
         position: relative;
      }
      .modalImg{
         width: 300px;
         height: 200px;
         position: absolute;  
      }
   </style>
</head>
<body>


<!-- Тип кодирования данных, enctype, ДОЛЖЕН БЫТЬ указан ИМЕННО так -->
<form enctype="multipart/form-data" action="index.php" method="POST">
    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
    <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
    <!-- Название элемента input определяет имя в массиве $_FILES -->
    <input name="img" type="file" />
    <input type="submit" value="Добавить картинку" />
</form>
   <?= $info .'<br>'?>
   <?= $gallery ?>

</body>
</html>
