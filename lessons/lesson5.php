<?php
    // LESSON 5
echo "Файловая система";
// Для подключения файлов php друг к дрругу есть директивы
// include "Имя файла";  // скажет, что файла нет
// require "Имя файла";  // будет фатальная ошибка и скрипт работу прекратит

include "lesson5 test.php";
var_dump($var_from_test);

include_once "lesson5 test.php"; // не допускает повторного подключения

/* Чтение из файла
1. Открыть файл 
$fp = fopen("Имя файла", режим чтения mode:"r");
После открытия можно заблоктровать
flock($fp, LOCK_EX);
2. Чтение из файла
fread($fp, 4088);
Разблоктровка файла
flock($fp, LOCK_UN);
3. Закрыть файл
fclose($fp);
*/



//file_put_contents("имя файла", FILE_APPEND | LOCK_EX);
//LOCK_EX - блокировка файла на момент записи

// Открывает, читает и закрывает файл
//file_get_contents($filename);

















