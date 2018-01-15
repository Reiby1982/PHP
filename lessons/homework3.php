<?php
/*
Обязательно сделать любые 5. Будет время, делайте больше:)
Большинство задач на применение функций для работы со строками. 
Задача 1 
Создать функцию с аргументом для вывода приветствия. Установить значение по умолчанию для аргумента равное «Гость» 
*/
echo "<br>";
echo "<p style='color: red'>Задача 1<p/>";

function hello_func($name="Гость") {
    echo "Привет тебе, " . $name . "!<br>";
}
 hello_func("Вася");
 hello_func();
/*
Задача 2 
Допустим, пользователь вводит названия городов через пробел. Вы их присваиваете переменной. 
Переставьте названия так, чтобы названия были упорядочены по алфавиту. 
*/
echo "<br>";
echo "<p style='color: red'>Задача 2<p/>";

$cities = "Якутск Санкт-Петербург Астрахань Ногинск";
var_dump($cities);
echo "<br>";
var_dump ($cityes = explode(" ", $cities)); // возвращает массив
echo "<br>";
sort($cityes);
$cityes = implode(" ", $cityes);
echo $cityes;
/*
Задача 3 
Написать функцию - конвертер строки. 
Возможности: 
перевод всех символов в верхний регистр, 
перевод всех символов в нижний регистр, 
перевод всех символов в нижний регистр и первых символов слов в верхний регистр. 
Это должна быть одна функция 
*/
echo "<br>";
echo "<p style='color: red'>Задача 3<p/>";

function reg_correct ($action, $user_str) {
    if ($action == "Up") {
        $user_str = mb_convert_case($user_str, MB_CASE_UPPER, "UTF-8");
        echo $user_str. "<br>";
    } elseif ($action == "Down")  {
          $user_str = mb_convert_case($user_str, MB_CASE_LOWER, "UTF-8");
          echo $user_str. "<br>";
       } elseif ($action == "DownUp")  {
          $user_str = mb_convert_case($user_str, MB_CASE_LOWER, "UTF-8");
          $user_str = mb_convert_case($user_str, MB_CASE_TITLE, "UTF-8");
          ucwords($user_str);
          echo $user_str. "<br>";
       } else {
            echo "Введите необходимую операцию<br>";
       }
    }
reg_correct("Up", "перевод в верхний регистр");
reg_correct("Down", "ПЕРЕВОД В НИЖНИЙ РЕГИСТР");
reg_correct("DownUp", "ПЕРЕВОД В НИЖНИЙ РЕГИСТР и буквы первых слов в верхний регистр");
reg_correct("", "");
/*
Задача 4 
Используя функцию удаления HTML и PHP-тегов из строки, выведите на экран строку «<h1>Hello, world!</h1>». 
Строка не должна выглядеть как заголовок первого уровня – все теги должны быть удалены. 
*/
echo "<br>";
echo "<p style='color: red'>Задача 4<p/>";

$str = "«<h1>Hello, world!</h1>»";

function tag_del ($arg) {
    strip_tags($arg);
    echo htmlentities ($arg);
}

tag_del($str);
/*
Задача 5 
Создайте массив. Объедините все элементы массива в строку и выведите её на экран. 
*/
echo "<br>";
echo "<p style='color: red'>Задача 5<p/>";

$days = [
    'Monday'=>"Понедельник",
    'Tuesday'=>"Вторник",
    'Wednesday'=>"Среда",
    'Thursday'=>"Четверг",
    'Friday'=>"Пятница",
    'Saturday'=>"Суббота",
    'Sunday'=>"Воскресенье",
];

$arr_separated = implode(", ", $days);
var_dump($arr_separated);
/*
Задача 6 
В переменной $date лежит дата в формате '30-11-2017'. Преобразуйте эту дату в формат '2017.11.30'. 
*/
echo "<br>";
echo "<p style='color: red'>Задача 6<p/>";

echo $date = '30-11-2017';
echo "<br>";

function rev ($date) {
    $date = explode("-", $date);
    $date = array_reverse($date); 
    $date = implode(".", $date);
    echo "Результат преобразования " . $date;
}
rev($date);
/*
Задача 7 
Дана строка '/php/'. Сделайте из нее строку 'php', удалив концевые слеши. 
*/
echo "<br>";
echo "<p style='color: red'>Задача 7<p/>";

$str2 = '/php/';
echo "$str2<br>";
$str2 = trim ($str2, "/"); // Функция удаления символов из строки
echo $str2;
/*
Задача 8 
Дана строка 'просто строка.'. В конце этой строки может быть точка, а может и не быть. Сделайте так, чтобы в конце этой строки гарантировано стояла точка. То есть: если этой точки нет - ее надо добавить, а если есть - ничего не делать. Задачу решите через rtrim 
*/
echo "<br>";
echo "<p style='color: red'>Задача 8<p/>";
$str4 = 'просто строка.';
function del_point ($arg) {
    $arg = rtrim ($arg, ".");
    echo $arg . ".";
}
del_point ($str4);

/*
Задача 9** 
Написать функцию, которая выводит количество дней, оставшихся до нового года. 
Функция должна корректно работать при запуске в любом году. 
*/
echo "<br>";
echo "<p style='color: red'>Задача 9<p/>";

$date_calc = "01.01.2007";
echo $date_calc . "<br>";
function ny_calc ($date_arg) {
    // получаем текущую дату
    // высчитываем дату Нового Года
    // высчитываем дату до указанной даты
}
$date_current = date('d.m.Y'); // получаем текущую дату
echo $date_current;

/*
Задача 10** 
мы передаём число функции, которая в цикле for пытается поделить его на числа из диапазона 1..num и выводит результат
*/
echo "<br>";
echo "<p style='color: red'>Задача 10<p/>";