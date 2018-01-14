<?php
// объявление функции
//function func_name($arg1, &$arg2, $arg3='default value', ...$args) {
//    тело функции;
//    return;
//}

//func_name(значения аргументов); // вызов функции

function echo_func($text) {
    echo "<p style='color: red'>$text</p>";
}
$txt = "Аргументы";
echo_func($txt);

//передача аргументов:
//1) по значению
//2) по ссылке &$arg2
//3) значение аргумента по умолчанию $arg3='default value'
//4) переменное количество аргументов ...$args


//по ссылке &$main_str,
// значение аргумента по умолчанию $adding_str="JS"
// значениями по умолчанию могут быть скалярные типы, массивы, null
$str = "I am lerning ";
function concat_func(&$main_str, $adding_str="JS") {
    $main_str .=$adding_str;
}
concat_func($str, "PHP"); // concat_func($str);
echo $str;

// область видимости
// константы видны и в функции
$str = "I am lerning ";
const CONST_NAME = 12;
//define("CON_NAME", true);
function concat_func2(&$main_str, $adding_str) {
    $main_str .=$adding_str;
    echo CONST_NAME;
//    echo "STR = ". gettype($str);
    $str = 3;
    return $str;
//    echo $main_str;
}
$ret_str = concat_func2($str, "PHP");
echo $ret_str . "<br>";
echo $str;

//переменное количество аргументов ...$numbs
// аргументы при вызове передаются в виде массива
function get_sum($arg, ...$numbs) {
    $res = 0;
    var_dump($numbs) ;
    foreach ($numbs as $val) {
        $res += $val;
    }
    return $res;
}

$summ = get_sum(2, 8, 1, 1);
echo_func($summ);

function summ ($a, $b) {
    echo $a + $b;
}
$arr = [2, 8];
summ(...$arr);


// тип передаваемых аргументов
function tst(double $arg) {
    echo gettype($arg);
    echo_func($arg);
}
//tst(true);

//PHP 5 - тип можно задать для массивов и классов
//PHP 7 - тип можно задать для массивов, классов и скалярных типов

function show_return($arg) {
    $arg += 89;
    //return; // выход из функции
    return $arg; // вернуть значение из функции
    // если необходимо вернуть несколько значений,
    // необходимо вернуть массив из этих значений:
    // ассоциативный
//    return [
//        "login" => $login,
//        "email" => $email
//    ];
    // или нумерованный
    // return [4, 9, 0];
    // код после return выполняться не будет
}

//PHP 7 - добавлена возможность
// объявлять тип возвращаемого значения

$show_return_res = show_return(8);
var_dump($show_return_res);

// статическая переменная
// существует только в локальной области видимости
// не теряет значения, когда выполнение программы
// выходит из этой обасти видимости
function counter() {
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

$some_var("Hello");

// доступ к аргументам функции
//func_get_arg()
//func_get_args()
//func_num_args()

function show_args_info() {
    var_dump("func_num_args " . func_num_args());
    var_dump("func_get_arg " . func_get_arg(0));
    var_dump(func_get_args());
//    for ($i = 0; $i < func_num_args(); $i++) {
//        echo "arg($i)" . func_get_arg($i) . "<br>";
//    }
    foreach (func_get_args() as $val) {
        var_dump($val);
    }
}

show_args_info(45, 89, null);




