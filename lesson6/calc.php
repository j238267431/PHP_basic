<?php
// задание 2
$html =  __DIR__ . '/main/calc.html';
$content = file_get_contents($html);

if (empty($_GET)){
   echo $content;
}

switch($_GET['act']){
   case "+": 
      $action="summ"; 
      echo getReplaced($action, $content);
break;
   case "-": 
      $action="minus";
      echo getReplaced($action, $content);
break;
   case "*": 
      $action="mult";
      echo getReplaced($action, $content);
break;
   case "/": 
      $action="div";
      echo getReplaced($action, $content);
break;
};  

function getReplaced($action, $content){

   return str_replace(['{{' . strtoupper($action) .'}}','{{NUMB1}}','{{NUMB2}}'], ['selected', $_GET['numb1'], $_GET['numb2']], $content);
}

function calculator($action){
   return $action();
};

function summ() {
   return (int)$_GET['numb1'] + (int)$_GET['numb2'];
};
function minus() {
   return (int)$_GET['numb1'] - (int)$_GET['numb2'];
};
function mult() {
   return (int)$_GET['numb1'] * (int)$_GET['numb2'];
};
function div() {
   if ((int)$_GET['numb2'] == 0) {
 
      return 'на ноль делить нельзя';
   }
   return (int)$_GET['numb1'] / (int)$_GET['numb2'];
};

echo calculator($action);
