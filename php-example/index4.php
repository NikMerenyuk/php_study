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

    // Массивы
//
//    // Одномерные массивы
//    $nums = array(4, 5, 7, 0, -23, 85);
//    $nums[1] = 45;
//    echo $nums[1] . '<br>';
//
//    $arr = [1, 2, 3, 4, 0.4, '8', true];
//
//    // Ассоциативные массивы
//    $list = ["age" => 50, "name" => "Alex", "hobby" => 'football'];
//    $list["name"] = "Bob";
//    echo $list["name"] . '<br>';
//
//    // Многомерные массивы
//    $matrix =[
//            [4, 6.4, 8],
//            [3, 2],
//            [1, 5, 8, '9']
//    ];
//    echo $matrix[0][1];


    // Цикл for
//    for($i = 10; $i <= 20; $i++)
//        echo $i . '<br>';

    // Цикл while (сначала проверяет условие и после выполняет цикл)
//    $i = 1;
//    while($i <= 10) {
//        echo $i . '<br>';
//        $i++;
//    }

    // Цикл Do While (1 раз выполняет код из цикла и после этого проверяет условие)
//    $i = 100;
//    do {
//        echo $i;
//    } while($i < 10);


    // Операторы в циклах
//    for($el = 100; $el > 10; $el /= 2) {
//        if($el < 15)
//            break;
//
//        if($el % 2 == 0)
//            continue;
//
//        echo $el . "<br>";
//    };

//    $list = [5, 7, 3, 8, "some", 45.7];
//
//    for($i = 0; $i < count($list); $i++)
//        echo "Element $i: $list[$i]<br>";

    $list = ["age" => 50, "name" => "Alex", "hobby" => 'football'];
    $arr = [5, 6, 8, 9];

//    foreach ($list as $item => $value) {
//        echo "Key: $item. Value: $value.<br>";
//    }

    foreach($arr as $i => $value) {
            echo "Index: $i. Value: $value.<br>";
    }
?>
</body>
</html>


