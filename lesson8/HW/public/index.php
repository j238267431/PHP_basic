<?php
// phpinfo();
// phpinfo();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
if(!empty($_SESSION['is_admin'] )){
   if($_SESSION['is_admin'] != 1){
      $_SESSION['is_admin'] = 0;
   }  
}

include dirname(__DIR__) . '/engine/main.php';
// echo dirname(__DIR__) . '/engine/main.php';

