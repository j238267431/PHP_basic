<?php


function indexAction() {

   if (empty($_SESSION['login'])){
         echo render('login.php');
         return;
   }
echo render(
   'userPage.php',
      [
         'user' => $_SESSION['user']
      ]
   );
}

function loginAction(){

   if($_SERVER['REQUEST_METHOD'] != 'POST'){
      header('location: ?p=login');
      return;
   }
   if(empty($_POST['login']) || empty($_POST['password'])){
      header('location: ?p=login');
      return;
   }


   $login = $_POST['login'];
   $password = $_POST['password'];
   
   $sql = "SELECT * FROM login WHERE login = '{$login}'";
   $result = mysqli_query(getLink(), $sql);
   $row = mysqli_fetch_assoc($result);

   if(password_verify($password, $row['hash'])){
      $_SESSION['login'] = true;
      unset($row['password']);
      $_SESSION['user'] = $row;
      $_SESSION['is_admin'] = $row['is_admin'];
      setMSG('Вы авторизовались');
   }
   header('location: ?p=login');
}


function logoutAction(){
   session_destroy();
   header('location: ?p=login');
}

