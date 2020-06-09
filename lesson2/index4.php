<?php

// задание 7

function currentTime(){

$hour = date('H', time()) + 3;
$min = date('i', time());
$hoursTxt = ' часа ';
if ($hour >= 5 && $hour <=20){
   $hoursTxt = ' часов ';
} else if ($hour === 1 || $hour === 21) {
   $hoursTxt = ' час ';
}
$minTxt = ' минут';
if (($min%10 >= 2 && $min%10 <= 4 && $min != 12 && $min != 13 && $min != 14 )){
   $minTxt = ' минуты';
} else if ($min%10 == 1 && $min != 11) {
   $minTxt = ' минута';
}

   return $hour . $hoursTxt . $min . $minTxt;
};

echo currentTime();

?>
