<?php

function indexAction(){
   if (!$_SESSION['is_admin']){
      setMSG('у Вас нет прав на просмотр этой страницы');
      return;
   }
   if (!$_SESSION['orders']){
      setMSG('заказы не выгружены');
      echo render('orders.php');
   }

}

function getUserOrdersAction(){
   $sql = "SELECT * FROM orders";
   $result = mysqli_query(getLink(), $sql);
   echo render('orders.php', ['result' => $result]);
}

function changeStatusAction(){
   $order_number = $_GET['order_number'];
   $status = $_POST['select'];
   $sql = "UPDATE orders SET status = '{$status}' WHERE id = '{$order_number}'";
   mysqli_query(getLink(), $sql);
   header('location: ?p=orders&a=getUserOrders');
}