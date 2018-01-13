<?php
    // LESSON 3
//---------------------------------------------------------------------------------------------
// ФУНКЦИИ пользовательские
// Объявление функиции

//function func_name ($args, &$args, $arg3 = 'defalt value',...$args) {
//    тело функции;
//    return;
//}
//
//func_name(arg1:значени функции); вызов функции 

function echo_func($text) {
    echo "<p style='color: red'>$text<p/>";
}
 echo_func("Аргументы");

/* передача аргументов
1. по значению
2. по ссылке &$args - перед именем аргументом поставить амперсант
3. значение аргумента по умолчанию $arg3 = 'defalt value'
4. переменное количество аргументов ...$args
*/
// значения по умолчанию могут быть скалярные типы, массивы и null
$str = "i am learning";
function concat_func(&$main_str, $adding_str ="JS") { // Значение по умолчанию
    $main_str .=$adding_str;
//    echo $main_str;
}
concat_func($str, "PHP");
echo $str;

// Переменное количество аргументов ...$args
// аргументы при вызове передаются в виде массива
function get_sum(...$numbs) {
    $res = 0;
    foreach ($numbs as $val) {
      $res+= $val;  
    }
    return $res;
}
$summ = get_sum(2, 8, 1, 1);
echo_func ($summ);

function summ2 ($a, $b) {
    echo $a+$b;
}
summ2(...[2,6]);

// Можно задавать тип передаваемых аргументов
//echo "<br>";
//function tst (boolean $boo) {
//    if ($boo) {
//        echo "True";
//    } else {
//        echo "False";
//    }
//}
//tst("true");


// RETURN
function show_return ($arg){
   $arg+=89;
//    return; // просто выходим из функции
    return $arg; // вернуть значение из функции
}
$show_return_res = show_return(8);
var_dump($show_return_res);

//---------------------------------------------------------------------------------------------
// статическая переменная функции
// Существует только в локальной области видимости
// сохраняет значение  когда программа выходит из этой области
function counter () {
    static $count = 0;
    $count++;
    return $count;
}

var_dump(counter());
var_dump(counter());
var_dump(counter());
var_dump(counter());

// анонимные функции
$some_var = function ($some_args) {
    echo $some_args;
};
$some_var('Hello');
// вызов по имени переменной


// доступ к аргументам функции
/*
func_get_arg()
func_get_args()
func_num_args() - ВОЗВРАЩАЕТ МАССИВ ИЗ ВСЕХ АРГУМНТОВ
*/
// СКАЧАТЬ ПРИМЕР С ГИТХАБА ИЗ ЛЕКЦИИ




