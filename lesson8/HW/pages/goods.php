<?php
// echo 'li';
function indexAction() {

   $sql = 'SELECT * FROM goods';
   $result = mysqli_query(getLink(), $sql);
   echo render('goods.php', ['result' => $result]);
}
function showFormAction(){

      echo render('addItem.php');

}

function addItemAction(){
   if(empty($_POST['name']) || empty($_POST['price']) || empty($_POST['info'])){
      setMSG('не заполнены все поля');
      echo render('addItem.php');
      return;
   }

   $name = $_POST['name'];
   $price = $_POST['price'];
   $info = $_POST['info'];
   $sql = "INSERT INTO goods (name, price, info) VALUES ('{$name}', '{$price}', '{$info}')";
   mysqli_query(getLink(), $sql) or die(mysqli_error(getLink()));
   setMSG('товар добавлен');
   header('location: ?p=goods');
}

function deleteAction(){
   $id = $_GET['id'];
   $sql = "DELETE FROM goods WHERE id = '{$id}'";
   mysqli_query(getLink(), $sql);
   header('location: ?p=goods');
}