<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Это чистый проект на PHP!</title>
</head>
<body>
<?php
echo "Привет, Хозяин!<br>" . date("Y-m-d H:i:s") . "<br><br>";

include_once("../src/TryService.php");

//tryService('Redis', fn() => (new \Redis)->connect('redis'));
//tryService('Memcache', fn() => (new \Memcached)->addServer("memcached", 11211));
//tryService('MySQL', function () {
//    $connect = mysqli_connect('db', 'root', 'root');
//    mysqli_close($connect);
//});

phpinfo(); ?>
</body>