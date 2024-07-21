<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
</head>
<body>
<?php
  // Математические операции
//    $x = 10;
//    $y = 20;
//
//    echo $x + $y . '<br>';
//    echo $x - $y . '<br>';
//    echo $x * $y . '<br>';
//    echo $x / $y . '<br>';
//    echo $x % $y . '<br>';
//
//    $x += 10;
//    $x++;  // $x += 1;
//    echo $x . '<br>';
//
//    echo M_PI . '<br>';
//    echo M_E . '<br>';
//
//    echo abs(-22);

    // Строковые операции
//    $str = 'Hello';
//    echo "VAR: $str";  /* Работает только если в двойных ковычках,
//                        но обработка двойных ковычек требует в два раза больше оперативной памяти, чем у одинарных */
//
//    echo "<input type=text>" . '<br>';
//
//    $length = strlen($str);
//    echo strtoupper(trim('     asdas     ') . '<br>');
//    echo "length: $length<br>";
//
//    echo md5("qwerty") .'<br>';


    // Условные конструкции
//    $a = 5;
//    $str = "Hello!";
//    $isWeatherGood = true;
//
//    if($str == "Hello" && !$isWeatherGood) /*
//                                              || - или
//                                              && - и
//                                          */
//        echo 'First';
//
//    elseif ($a == 5){
//        $res = "Second";
//        echo $res;
//    }
//    else
//        echo 'Else';  // если строчка одна, то фигурные скобки можно не ставить


    // Switch-case
    $x = 4;

    switch($x) {
        case 5:
            echo "Var: 5";
            break;
        case 7:
            echo "Var: 7";
            break;
        case 9:
            echo "Var: 9";
            break;
        case 6:
            echo "Var: 6";
            break;
        default:
            echo 'Default work';
    }

?>
</body>
</html>


