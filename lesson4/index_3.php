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
   "<img data-number=\"{$number}\" class=\"image\" src=\"gallery/{$img}\"></img>";
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
         cursor: pointer;
      }
      .modal{
         /* display: none; */
         width: 100%;
         height: 100%;
         background-color: rgba(0,0,0,0.8);
         position: fixed;
         z-index: 1;
         left:0;
         top:0;
         overflow: auto;
         /* display: none; */
      }

      .modalImg{
         margin:15% 37%;
         width: 450px;
         height: 400px;
      }
      .appearance{
         display: none;
      }
      .close{
         color: white;
         position: absolute;
         left: 948px;
         bottom: 430px;
         font-size: 40px;
         cursor: pointer;
      }

   </style>
</head>
<body>
   <div id = "modal" class="modal appearance">
         <div id="close" class="close">&#xD7;</div>
         <img class="modalImg" id="imageId" src ="">
   </div>


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

   <script>
      let close = document.getElementById('close')
      let modal = document.getElementById('modal')
      let img = document.getElementById('imageId')
      document.addEventListener('click', () => {
         if(event.target.src){
            img['src'] = event.target.src
            modal.classList.remove('appearance')
         }
         if (event.target.id === "close"){
            modal.classList.add('appearance')
         }
      })
   </script>
</body>
</html>
