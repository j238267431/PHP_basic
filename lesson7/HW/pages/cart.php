<?php
// phpinfo();
// unset($_SESSION['cart']);
function indexAction(){
   return allAction();
}

function allAction(){
   // $sql = 'SELECT * FROM goods';
   // $result = mysqli_query(getLink(), $sql);
   // var_dump($_SESSION['cart']);
   // var_dump($result);
   echo render('cart.php', ['result' => $_SESSION['cart']]);
}

function oneAction(){
   echo 'user';
}