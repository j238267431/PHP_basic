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
   if (empty($_SESSION['cart'])){
      setMSG('корзина пуста');
      echo render('cart.php');
      return;
   }
   if (!empty($_SESSION['orderSent'])) {
      if ($_SESSION['orderSent']) {
         $_SESSION['cart'] = [];
         $_SESSION['orderSent'] = false;
      }
   }

   echo render('cart.php', [
      'result' => $_SESSION['cart']
      ]);
}

function ordersAction(){
   $user_id = (int)$_GET['user_id'];
   $sql = "SELECT * FROM orders WHERE user_id = '{$user_id}'";
   $result = mysqli_query(getLink(), $sql);
   echo render('orders.php', ['result' => $result]);
}

