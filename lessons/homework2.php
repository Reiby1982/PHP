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

/*
2. Дан массив [3, 1, 6, 0, 4, 5]. 
С помощью цикла foreach найдите сумму квадратов элементов этого массива. 
Результат вывести на экран; 
*/
echo "<br>";
echo "Задача 2<br>";
$arr4 = [3, 1, 6, 0, 4, 5];
var_dump($arr4);
$summ =0;
foreach ($arr4 as $value) { 
    $value =$value**2;
    $summ+=$value;
    echo "$value<br>";
}
echo "Сумма квадратов элементов массива равна $summ<br>";
/*
3. Вывести таблицу умножения чисел до 10 с помощью двух циклов for (вложенный цикл); 
*/
echo "<br>";
echo "Задача 3<br>";
echo "<br>";
for ($i = 1; $i < 11; $i=$i+1) {
    for ($j = 1; $j < 11; $j=$j+1) {
        echo "i = $i j= $j i*j = $i*$j<br>";
    }
}
/*
4. Нарисуйте треугольник из символов *. Высота треугольника равна 15. 
*/
echo "<br>";
echo "Задача 4<br>";
$hightTr = 15;
for($i=1; $i<=$hightTr; $i++) {
    for($j=1; $j<=$i; $j++) {
        echo "*";
    }
    echo "<br>";
}
/*
5. Создать массив из дней недели. С помощью цикла foreach выведите все дни недели, <br> 
а текущий день выведите жирным. Текущий день можно получить с помощью функции date. Название дней выводить по-русски 
*/
echo "<br>";
echo "Задача 5<br>";
$days = [
    'Monday'=>"Понедельник",
    'Tuesday'=>"Вторник",
    'Wednesday'=>"Среда",
    'Thursday'=>"Четверг",
    'Friday'=>"Пятница",
    'Saturday'=>"Суббота",
    'Sunday'=>"Воскресенье",
];

$currentDay = date('l');
var_dump($currentDay);
    
var_dump($days);
foreach ($days as $key => $value) {
    if ($key == $currentDay) {
        echo '<b>'.$value.'</b><br>';
    } else {
    echo "$value<br>";
    }
}


/*
6. Вывести все числа, от 0 до 30 (включительно) , у которых есть хотя бы одна цифра 3 и которые не делятся на 5. 
Посмотрите функцию strpos! 
*/

echo "<br>";
echo "Задача 6<br>";
$a = 0;
$b = 30;

/*
7**. Отсортировать массив по 'price' 
$arr = [ 
'1'=> [ 
'price' => 10, 
'count' => 2 
], 
'2'=> [ 
'price' => 5, 
'count' => 5 
], 
'3'=> [ 
'price' => 8, 
'count' => 5 
], 
'4'=> [ 
'price' => 12, 
'count' => 4 
], 
'5'=> [ 
'price' => 8, 
'count' => 4 
], 
];
*/
echo "<br>";
echo "Задача 7<br>";