<?php
// echo 'li';
function indexAction() {
   $sql = 'SELECT * FROM goods';
   $result = mysqli_query(getLink(), $sql);
   echo render('goods.php', ['result' => $result]);
}