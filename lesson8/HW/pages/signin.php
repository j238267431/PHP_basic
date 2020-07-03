<?php
// echo 'li';
function indexAction() {

   if (empty($_SESSION['login'])){
      echo render('signin.php');
      return;
   }
   echo render(
      'userPage.php',
      [
         'user' => $_SESSION['user']
      ]
   );
}

function signinAction(){

   if($_SERVER['REQUEST_METHOD'] != 'POST'){
      header('location: ?p=signin');
      return;
   }
   if(empty($_POST['signin']) || empty($_POST['password']) || empty($_POST['name'])){
      setMSG('необходимо заполнить все поля');
      header('location: ?p=signin');
      return;
   }


   $name = $_POST['name'];
   $login = $_POST['signin'];
   $password = $_POST['password'];
   $hash = password_hash($password, PASSWORD_DEFAULT);

   $sql="SELECT * FROM login WHERE login = '{$login}'";
   $result = mysqli_query(getLink(), $sql);
   $row = mysqli_fetch_assoc($result);

   if($row['login'] == $login){
      setMSG('пользователь с таким логином уже существует');   
      $_SESSION['login'] = false;
      header('location: ?p=signin');
      return;
   } 
      $sql = "INSERT INTO login (name, login, password, hash, is_admin) VALUES ('{$name}', '{$login}', '{$password}', '{$hash}', 0)";
      mysqli_query(getLink(), $sql) or die(mysqli_error(getLink()));
      $_SESSION['login'] = true;
      $sql="SELECT * FROM login WHERE login = '{$login}'";
      $result = mysqli_query(getLink(), $sql);
      $row = mysqli_fetch_assoc($result);
      $_SESSION['user'] = $row;
      setMSG('Вы успешно зарегистрировались');
      header('location: ?p=signin');
}

 


