<?php
function indexAction(){
   return allAction();
}
function allAction() {
   $id = (int)$_GET['id'];
   $sql = 'SELECT * FROM goods WHERE id =' . $id;
   $result = mysqli_query(getLink(), $sql);
   $row = mysqli_fetch_assoc($result);
   $name = $row['name'];
   $info = $row['info'];
   $_SESSION['item']['id'] = ['name' => $name, 'info' => $info, 'id' => $id];
   echo render('item.php', ['result' => $_SESSION['item']]);
}

function addToCartAction(){
   $id = (int)$_GET['id'];
   $sql = 'SELECT * FROM goods WHERE id =' . $id;
   $result = mysqli_query(getLink(), $sql);
   $row = mysqli_fetch_assoc($result);
   $flag = $_GET['flag'];
   $name = $row['name'];
   $info = $row['info'];
// unset($_SESSION['cart']);
   if(array_key_exists($id, $_SESSION['cart'])){
      $_SESSION['cart'][$id]['qty']++;
   } else {
      $_SESSION['cart'][$id] = ['id' => $id, 'name' => $name, 'info' => $info, 'qty' => 1];
   }
   if ($flag){
      echo render('cart.php', ['result' => $_SESSION['cart']]);

   } else {
      echo render('item.php', ['result' => $_SESSION['cart']]);

   }
}

function removeFromCartAction(){
      $id = (int)$_GET['id'];
      $sql = 'SELECT * FROM goods WHERE id =' . $id;
      $result = mysqli_query(getLink(), $sql);
      $row = mysqli_fetch_assoc($result);
      $name = $row['name'];
      $flag = $_GET['flag'];
   // unset($_SESSION['cart']);
      if(array_key_exists($id, $_SESSION['cart'])){
         if($_SESSION['cart'][$id]['qty']>1){
         $_SESSION['cart'][$id]['qty']--;
      } else {
         unset($_SESSION['cart'][$id]);
      }
   }

   if ($flag){
      echo render('cart.php', ['result' => $_SESSION['cart']]);

   } else {
   echo render('item.php', ['result' => $_SESSION['cart']]);
   }  
}

function oneAction(){
   echo 'user';
}