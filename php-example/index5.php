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

//    function info($word)
//    {
//        echo "$word<br>";
//    }

//    function math($x, $y)
//    {
//        return $x + $y;
//    }
//
//    $res_1 = math(4, 6);
//    $res_2 = math(5, 6);
//
//    info($res_1);
//    info($res_2);


//    function summary($arr)
//    {
//        $summa = 0;
//        foreach($arr as $value)
//        {
//            $summa += $value;
//        };
//        return $summa;
//    }
//
//    $list = [5, 7, 3];
//    echo summary($list) . "<br>";
//    echo summary([5, 2, 3]) . "<br>";


    // Область видимости
    function info()
    {
        global $x;
        $x = 0;
    }

    function click()
    {
        static $count;  // Сохраняет значение при вызове функции
//        $count = 0;
        $count ++;
        echo $count . "<br>";
    }

    click();
    click();
    click();

//    $x = 10;
//    info();
//    echo $x;

?>
</body>
</html>


