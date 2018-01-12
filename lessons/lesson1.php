<?php
    // однострочный
    /*
    многострочный
    */
    # комментарий в стиле Unix

    echo "Hello"; // вывод на экран, ; - обязательно
        
    var_dump("Hello"); // отлавливает ошибки
    var_dump([0,1,2,4]);

    // раскомментировать в настройках Xdebug

    //Переменные
    $variableName;

    // первый символ: буква или знак _
    // далее комбинация из букв, цифр и _

    $hello = "Hello";
    $hello = 90; // переопределение переменной
    echo $hello;
    var_dump($variable_name);

    // var_dump($GLOBALS); // встроенная переменная, содержащая информацию обо всем
    // $_SERVER
    // $_REQUEST супер глобальные переменные
//---------------------------------------------------------------------------------------
    // КОНСТАНТЫ пишут заглавными буквами, доступныиз любой области видимости
   
    // 1-й способ
    define("CONST_NAME", "const value"); // первым аргументом имя, вторым - значение
    // 2-й способ
    const CONST_2_NAME = "value 2";
    
    // Вывод двумя способами напрямую или через функцию
    var_dump(CONST_NAME);
    var_dump(constant ("CONST_2_NAME"));

    get_defined_constants(); // список объявленных констант
//    var_dump(get_defined_constants());

//---------------------------------------------------------------------------------------

    // ТИПЫ ДАННЫХ
    //1. Простые (скалярные) типы данных
        //1) boolean - логический тип
        //2) integer - целочисленный тип
        //3) float - число с плавающей точкой
        //4) string - строка
    //2. Смешанные типы данных
        //1) array - массив (нумерованный или ассоциативный)
        //2) object - объект
        //3) callable
        //4) interable
    //3. Специальные типы
        //1) NULL
        //2) resource


//--------------------------------------------------------------------------------------
    // Логический тип
    $boo = true; // false
    
    //Целочисленный тип
    // max и min можно установить в настройках PHP_MAX_SIZE
    // PHP_MIN_SIZE - начиная с php 7.0.0
    $num = 56;
    // для округления функция round();
    

    // float (double)
    $float_num = 1.467;
    // для вычислений лучше испльзовать дополнительно gmp-функции, которые обеспечиваюют высокую точность операций с float (double)
    
    // NAN is_nan(); - проверка на не число
   
    // СТРОКИ
    $num = 90;
    $str = "Hello \n New, {$num}"; // лучше переменные заключать в фигурные скобки в строке
    $str2 = 'Hello \n, $num';

    var_dump($str);
    var_dump($str2);
    
//--------------------------------------------------------------------------------------

    // Массивы
    $arr = array(1,2,3,4); // нумерованный массив
    $arr2 = array(
        'key1' => 'value',
        'key2' => 'value2',
    ); // ассоциативный массив

    var_dump($arr);
    var_dump($arr2);   
    
    //Объекты создаются ТОЛЬКО на основе классов описанных заранее
    $obj = new StdClass();
    var_dump($obj);

    // NULL 

    // 1. если переменной не присвоили значение
    // 2. если переменной явно присвоили null
    // 3. если переменная была уничтожена функцией unset(имя_переменной);

    /*  функции для проверки типа данных
        is_null();
        is_bool();
        is_int();
        is_float();
        is_string();
        is_array();
        is_object();
        is_resource();
    */

    // Приведение к определенному типу
    // передпеременной указываем тик к которому хотим привести
    // (string) | (int) | (integer) | (bool) | (boolean) | (array) | (object) | (float) | (double) | (real)
    $num_var = 12;
    $str_var = (string) $num_var;
    var_dump($str_var);

//------------------------------------------------------------------------------------------

//Операторы
/*
    1. присваивание = += -= *= /= %= **=
    */
$a = ($b = 4) + 5;
echo "Значение а =", $a;
/*
    2. арифметические  + - * / % **
    3. инкремент и декремент ++ --
    4. конкатенация строк .
    5. операторы сравнения  == === != !== < > <= >= 
        <=> space_ship сравнивает две пременные и определяет какая из них больше возвращая 1, 0, -1
        var_dump( 4 <=> 8); -1
        var_dump( 4 <=> 2); 1
        var_dump( 4 <=> 4); 0
    6. логические && - и, || - или, !- не, and - и, or - или
    xor 
    if (a === 7 xor b === 8) {} - выполнение только одного условия, а не обоих сразу
    !!!!!!!ПОЧИТАТЬ ПРО ПРИОРИТЕТЫ ОПЕРАТОРОВ
*/  
//------------------------------------------------------------------------------------
    
    $b = " ";
    var_dump((boolean) $b);
    // false - "", "0", array(), null, 0

//---------------------------------------------------------------------------------------------
// Хранение переменной по ссылке
$var1 = 56;
$var2 = &$var1; // Хранение переменных по ссылке. Перед переменной поставить &

//---------------------------------------------------------------------------------------------
// Переменная переменной
$a = 'hi';
$$a = 'world';
echo "$a ${$a}<br>";
echo "$a $hi";

// $$a = $ + $a : $ + hi => $hi
// Строки будут сравниваться как числа

//---------------------------------------------------------------------------------------------
// 8. Операторы исполнения `` воспринимают как команду из терминала
$a = `ipconfig`;
echo "<p>$a<p/>";
























