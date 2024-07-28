<?php
    $title = "Главная страница";
    require_once 'blocks/header.php';
    // require_once / include_once - загржают файл лишь один раз.
    // require - если файл не найден, то страница совсем не загрузится и выдаст ошибку
    // include - если файл не найден, то страница будет загружена, но без блока с этим файлом / выдаст ошибку.
?>

<h1>Главная</h1>

<?php
    require 'blocks/footer.php';
?>


