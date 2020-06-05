<?php
// задание 6
function power($val, $pow){
   if ($pow == 1) {
      return $val;
   } else if ($pow == 0) {
      return 1;
   } else {
      $pow--;
      return $val * power($val, $pow);
   }
}

echo power(4,3);


?>