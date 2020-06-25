<?php
// echo 'li';
function indexAction() {
   $sql = 'SELECT id, fio, login, password, is_admin FROM users';
   $result = mysqli_query(getLink(), $sql);
   echo render('home.php', ['result' => $result]);
}