<?php
function indexAction(){

   return allAction();

}
function allAction() {
   $id = (int)$_GET['id'];
   $name = getDataFromDB()['name'];
   $info = getDataFromDB()['info'];
   echo render('item.php', ['result' => ['id' => $id, 'name' => $name, 'info' => $info]]);
} 

function addAction(){
   $id = (int)$_GET['id'];
   $name = getDataFromDB()['name'];
   $info = getDataFromDB()['info'];
   $_SESSION['cart'][$id] = ['id' => $id, 'name' => $name, 'info' => $info, 'qty' => 1]; 
   echo render('cart.php', ['result' => $_SESSION['cart']]);
}

function addToCartAction(){
   $id = (int)$_GET['id'];
   $_SESSION['cart'][$id]['qty']++;
   echo render('cart.php', ['result' => $_SESSION['cart']]);
}

function removeFromCartAction(){
      $id = (int)$_GET['id'];
      if(array_key_exists($id, $_SESSION['cart'])){
         if($_SESSION['cart'][$id]['qty']>1){
         $_SESSION['cart'][$id]['qty']--;
      } else {
         unset($_SESSION['cart'][$id]);
      }
   }
      echo render('cart.php', ['result' => $_SESSION['cart']]);
}

function makeorderAction(){
   // header('Content-Type: application/json');
   if(empty($_SESSION['login'])){
      setMSG('Вам необходимо авторизоваться прежде чем сделать заказ');
      echo render('login.php');
      return;
   }

   $json = json_encode($_SESSION['cart'], JSON_UNESCAPED_UNICODE);
   $json = mysqli_real_escape_string(getLink(), $json);


   $userId = $_SESSION['user']['id'];
   $sql = "INSERT INTO orders (user_id, items) VALUES ($userId, '{$json}')";
   mysqli_query(getLink(), $sql) or die(mysqli_error(getLink()));
   setMSG('заказ оформлен');
   $_SESSION['orderSent'] = true;
   header('location: ?p=cart');
}