<?php
// echo 'li';
function indexAction() {
   $name = $_SESSION['signin']['name'];
   $login = $_SESSION['signin']['signin'];
   $password = $_SESSION['signin']['password'];
   $hash = password_hash($password, PASSWORD_DEFAULT);

   $sql="SELECT * FROM login WHERE login = $login";
   $result = mysqli_query(getLink(), $sql);
   $row = mysqli_fetch_assoc($result);
   var_dump($row);
   var_dump($row['login'] == $login);
   if($row['login'] == $login || $row != Null){
      echo render('signin.php', ['result' => $result]);
      echo 'пользователь с таким логином уже существует';
   } else {
      $sql = "INSERT INTO login (name, login, password, hash) VALUES ('$name', '$login', '$password', '$hash')";
      $result = mysqli_query(getLink(), $sql);
      echo render('signin.php', ['result' => $result]);
   }


}