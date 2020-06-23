<?php
$link = mysqli_connect('localhost', 'root', 'root', 'shop');

function getPage(array $pages){
   $pageNumber = 1;
   if (!empty($_GET['page'])) {
      $pageNumber = (int)$_GET['page'];
   }
   if (empty($pages[$pageNumber])) {
      $pageNumber = 1;
   }
   return $pages[$pageNumber];
};
function addCommentToDB($link, $comment, $goods_id){
   $sql = "INSERT INTO
            comments 
               (comment, goods_id)
            VALUES
               ('$comment', '$goods_id')
             ";
   mysqli_query($link, $sql);
}
function submitTheForm($link, $text){
   global $text;
   if(!empty($_POST['submit'])){
      if (!empty($_POST['text'])){
         $comment = $_POST['text'];
         $goods_id = (int)$_GET['id'];
         addCommentToDB($link, $comment, $goods_id);
         $text = 'спасибо за отзыв';
      };
   };
};