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
//    define('MY_AGE', 24);    // Использовалось на старых версиях
    const MY_AGE = 24;
    echo MY_AGE . '<br>';

    $number = 5;
    $num = -0.55;

    $str = 'Переменная';
    $bool = true;

    $a = 0.5;
    $b = '0.5';
    echo $a + floatval($b);

    echo $str . ': ' . $number . '. Var 2: ' . $num;

?>
</body>
</html>


