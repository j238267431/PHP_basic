<?php
// 10 задание
$table = "<table>";
$table .= "<tr>";
for ($i = 0; $i <=10; $i++){
   if ($i == 0){
      $table .= "<td></td>";
   } else {
      $table .= "<td class = 'tr'>{$i}</td>";
   }
}
$table .= "</tr>";
for ($i = 1; $i <= 10; $i++){
$table .= "<tr><td class = 'td'>{$i}</td>";
   for ($j = 1; $j <= 10; $j++){
      $mult = $i * $j;
      $table .= "<td>{$mult}</td>";
      
   };
   $table .= "</tr>";

};
$table .= "</table>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
      td {
         width: 20px;
         height: 20px;   
      }
      .tr{
         border-bottom: 1px solid black;
      }
      .td {
         border-right: 1px solid black;
      }

   </style>
</head>
<body>
<?php echo $table; ?>
</body>
</html>