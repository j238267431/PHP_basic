<?php // задание 4
$title = "lesson1";
$text = "tasks of the lesson1";
$currentYear = date('Y');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title ?></title>
</head>

<body>
    <h1 class="rty"><?php echo $text; ?></h1>
    <?php 
    echo "current year $currentYear".'<br>'
    ?>



    <?php // задание 5
        $a = 1;
        $b = 2;

        $a = $a.$b;
        $b = substr($a, 0, 1);
        $a = substr($a, 1, 1);
        echo $a;
        echo $b;
    ?>


    <?php // задание 2
        $name = "GeekBrains user"; // присвоение значения переменной
        echo "Hello, $name!"; // вывод переменной на экран
    ?>

    <?php
        define('MY_CONST', 100); // присваиваем значение константе у которой значение не может быть перезаписано
        echo MY_CONST; // выврдим на экран значение константы
    ?>

    <?php
        $a = 1; // присвоение значения переменной
        echo "$a"; // вывод значения переменной
        echo '$a'; // выврд на экран текста $a
    ?>

    <?php // задание 3
        $a = 5;
        $b = '05';
        var_dump($a == $b);         // Почему true? потому что здесь происходит не по типу как === роэтому true
        var_dump((int)'012345');     // Почему 12345? потому что int преобразует в число
        var_dump((float)123.0 === (int)123.0); // Почему false? потому что тройное равенство проверяет еще равен ли тип. В данном примере типы не равны
        var_dump((int)0 === (int)'hello, world'); // Почему true? (int)'hello, world' - преобпащуется в 0 потому что не может преобпаховаться в число
    ?>


    <?php


    // echo $userName;
    // echo $userName;
    // echo $userName;


    //    $a = 10;
    //    $a += 10; //$a = $a + 10
    //    $a .= 10; //$a = $a . 10
    //    var_dump($a);


    //    $a = (int)'100asd 1 0 dsefggsdfg sdgdfg ds';
    //    var_dump(is_int($a));
    //    $b = 10;
    //
    //    $c = $a + $b;
    //    var_dump($c);

    //    echo <<<php
    //        <h2 class="test"> {$userName}s </h2>
    //        <p style="color: red">Test</p>
    //php;


    //        echo "<h2> " . $userName . "</h2>";
    //        echo "<h2> $userName </h2>";
    //        echo '<h2> $userName </h2>';
    //        echo "<h2> {$userName}s </h2>";
    //        echo "<h2 class=\"test\"> {$userName}s </h2>";
    ?>
    <script>
        var a = '<?php echo 10 ?>';
    </script>
</body>

</html>