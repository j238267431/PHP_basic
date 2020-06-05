<?php 

// задание 1

$a = -5;
$b = -10;

if ($a >=0 && $b >= 0){
    echo $a - $b."<br>";
}
if ($a < 0 && $b < 0){
    echo $a * $b."<br>";
}

if (($a >=0 && $b < 0) || ($a < 0 && $b >= 0)){
    echo $a + $b."<br>";
} 


// задание 2

$a = 0;

switch ($a){
  case 0;
  echo $a;
  $a++;
  case 1;
  echo $a;
  $a++;
  case 2;
  echo $a;
  $a++;
  case 3;
  echo $a;
  $a++;
  case 4;
  echo $a;
  $a++;
  case 5;
  echo $a;
  $a++;
  case 6;
  echo $a;
  $a++;
  case 7;
  echo $a;
  $a++;
  case 8;
  echo $a;
  $a++;
  case 9;
  echo $a;
  $a++;
  case 10;
  echo $a;
  $a++;
  case 11;
  echo $a;
  $a++;
  case 12;
  echo $a;
  $a++;
  case 13;
  echo $a;
  $a++;
  case 14;
  echo $a;
  $a++;
  case 15;
  echo $a;
  $a++;
  
}
echo '<br>';

// задание 3

function summ($a, $b){
    return $a + $b;
}

function mult($a, $b){
    return $a * $b;
}

function subtr($a, $b){
    return $a - $b;
}

function div($a, $b){
    return $a / $b;
}

echo summ(3, 4).'<br>';
echo mult(4, 6).'<br>';
echo subtr(9, 4).'<br>';
echo div(3, 9).'<br>';

// задание 4

function mathOperation($a, $b, $operation){
    switch ($operation){
        case 'summ';
            echo summ($a, $b);
            break;
        case 'mult';
            echo mult($a, $b);
            break;
        case 'subtr';
            echo subtr($a, $b);
            break;
        case 'div';
            echo div($a, $b);
            break;
    }
}

mathOperation(4,6,'summ');

?>