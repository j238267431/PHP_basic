<?php
// echo 'li';
function indexAction() {
   $login = $_SESSION['login']['login'];
   $password = $_SESSION['login']['password'];

   $sql = "SELECT * FROM login WHERE login = $login";
   
   $result = mysqli_query(getLink(), $sql);
   $row = mysqli_fetch_assoc($result);
   $_SESSION['name'] = $row['name'];
   $hash = $row['hash'];
   $hashPassword = password_verify((string)$password, (string)$hash);
   if($hashPassword && $row['login'] == $login){
      echo render('userPage.php', ['result' => $result]);
   } else {
      $result = mysqli_query(getLink(), $sql);
      echo render('login.php', ['result' => $result]);
   }

   
}

