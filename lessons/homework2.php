<?php
/*
Задание к субботе (13.01.18): 
1. Функции для работы с массивами 
 
2) 
- array_count_values
Возвращает ассоциативный массив со значениями array в качестве ключей и их количества в качестве значений.
 - count 
 Подсчитывает количество элементов массива или что-то в объекте
*/ 
echo "Функции для работы с массивами<br>";
echo "array_count_values<br>";

$arr1 = [1, 2, 'hello', 'crazy', 'world', 1, 1, 'crazy'];
var_dump($arr1);
var_dump(array_count_values($arr1));

echo "<br>";
echo "count<br>";

$arr2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
var_dump(count($arr2));

echo "<br>";
$arr3 = [
    'key1' => $arr2,
    'key2' => $arr1,
];
var_dump($arr3);
var_dump(count($arr3));
var_dump(count($arr3, COUNT_RECURSIVE));