<?php 

// задание 1
$i = 0;
while ($i <= 100 ) {
   if ($i%3 == 0){
   echo $i.' ';
   }
   $i++;
}

// задание 2
echo '<br>';
$i = 0;
$even = ' - нечетное число.';
do {
   if ($i == 0){
 echo $i . ' - ноль' . '<br>';
} else {
   echo $i . $even . '<br>';
   if ($even == ' - нечетное число.') {
      $even = ' - четное число.';
   } else {
      $even = ' - нечетное число.';
   }
}
 $i++;
} while ($i <= 10);

// задание 3
echo '<br>';
$array = [
   'Московская область' => ['Москва', 'Зеленоград', 'Клин'], 
   'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
   'Рязанская область' => ['Рязань', 'Рыбное', 'Искра']
];

   foreach ($array as $key => $value){
      echo $key . ':<br>';
      echo implode(', ', $value).'<br>';
   }

   // задание 4

   echo '<br>';
   $array = ['а' => 'a',
   'б' => 'b',
   'в' => 'v',
   'г' => 'g',
   'д' => 'd',
   'е' => 'e',
   'ж' => 'zh',
   'з' => 'z',
   'и' => 'i',
   'к' => 'k',
   'л' => 'l',
   'м' => 'm',
   'н' => 'n',
   'о' => 'o',
   'п' => 'p',
   'р' => 'r',
   'с' => 's',
   'т' => 't',
   'у' => 'u',
   'ф' => 'ph',
   'х' => 'h',
   'ц' => 'ts',
   'ч' => 'ch',
   'ш' => 'sh',
   'щ' => 'sh',
   'ъ' => "'",
   'ь' => "'",
   'э' => 'e',
   'ю' => 'yu',
   'я' => 'ya',
    ' ' => ' ' 
   ];
// вариант 1 (некоторые буквы не работают)
$word = 'клюква'; 
function translit_1($word, $array){
   for ($i = 0; $i < mb_strlen($word); $i ++){
      $flippedArray = array_flip($array);
      $letter = mb_substr($word, $i, 1);
      echo array_search($letter, $flippedArray);
   }
}

// вариант 2
translit_1($word, $array);
echo '<br>';
$word = 'клюква растет в лесу'; 
function translit_2($word, $array){
   for ($i = 0; $i < mb_strlen($word); $i ++){
      $letter = mb_substr($word, $i, 1);
      foreach($array as $key => $value){
         if ($key == $letter){
            echo $value;
         }
      }
   }
}

translit_2($word, $array);

// задание 5
echo '<br>';
function replace($text){
   return str_replace(' ', '_', $text);
};

echo replace('ля ля ля ');

// задание 6 в файле index_file.php

// задание 7

echo '<br>';
for ($i = 0; $i <= 9; var_dump($i++)){

};
echo '<br>';
for ($i = 0; $i <= 9; print $i++){
   
};


// задание 8

echo '<br>';
$array = [
   'Московская область' => ['Москва', 'Зеленоград', 'Клин'], 
   'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
   'Рязанская область' => ['Рязань', 'Рыбное', 'Искра']
];

   foreach ($array as $key => $value){
      echo $key . ':<br>';
      $newArrayCities = [];
      foreach ($value as $city) {
         if (preg_match('/^К+/iu', $city)){
            $newArrayCities[] = $city;
         }
      };
      echo implode(', ', $newArrayCities).'<br>';
   }

   echo '<br>';


   // задание 9



   echo '<br>';
   $array = ['а' => 'a',
   'б' => 'b',
   'в' => 'v',
   'г' => 'g',
   'д' => 'd',
   'е' => 'e',
   'ж' => 'zh',
   'з' => 'z',
   'и' => 'i',
   'к' => 'k',
   'л' => 'l',
   'м' => 'm',
   'н' => 'n',
   'о' => 'o',
   'п' => 'p',
   'р' => 'r',
   'с' => 's',
   'т' => 't',
   'у' => 'u',
   'ф' => 'ph',
   'х' => 'h',
   'ц' => 'ts',
   'ч' => 'ch',
   'ш' => 'sh',
   'щ' => 'sh',
   'ъ' => "'",
   'ь' => "'",
   'э' => 'e',
   'ю' => 'yu',
   'я' => 'ya',
    ' ' => ' ' 
   ];

echo '<br>';
$txt = 'на дворе трава на траве дрова';
function trans($txt, $array){
   for ($i = 0; $i < mb_strlen($txt); $i ++){
      $letter = mb_substr($txt, $i, 1);
      foreach($array as $key => $value){
         if ($key == $letter){
            $newTxt[] = $value;
         }
      }
   }
   echo str_replace(' ', '_', implode("", $newTxt));
}

trans($txt, $array);


// 10 задание в фвйле mult.php

?>