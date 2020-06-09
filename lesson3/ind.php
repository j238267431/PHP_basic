<?php

error_reporting(E_ALL);
ini_set('display_errors','on');
$host = 'localhost';
$user = 'root';
$password = 'root';
$dbName ='test';
$link = mysqli_connect($host,$user,$password,$dbName) or die(mysqli_error($link));
mysqli_query($link, "SET NAMES 'utf8'");
$query = "SELECT name, age FROM workers where (age>20 and age< 27) or (salary >300)";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
//var_dump($result);
//$user = mysqli_fetch_assoc($result);
//var_dump($user);

for($data=[]; $row = mysqli_fetch_assoc($result); $data[]=$row);
var_dump($data);
?>