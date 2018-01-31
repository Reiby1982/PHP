<?php
echo "Шаблоны проектирования";
// шаблон проектирования одиночка
// благодаря подобной организации кода, на основе класса можно создать только один объект,
// остальные будут ссылками на него, т.е при изменении одного объекта, изменятся все
class Singleton {
    private function __construct(){}  //закрываем конструктор, что не позволит создавать объекты через new

    public $important_value;

    private static $_instance;
    //создаем статическую переменную, чтобы она запомнила значение,
    // private - не позволит менять ее снаружи класса

    public static function getInstance() { // статический метод для создания объекта
        if(!isset(self::$_instance)) { // если переменной $_instance не присвоено значение
            self::$_instance = new self(); // == self::$_instance = new Singleton(); - присваиваем ей значение - объект этого класса
        }
        return self::$_instance; // возвращаем $_instance (т.е обект класса Singleton)
    }
}


$obj1 = Singleton::getInstance();
$obj1->important_value = '$obj1 установил свойство'; // задаем значение свойства первому объекту

$obj2 = Singleton::getInstance();
var_dump($obj2->important_value); // Оно появляется и у второго
$obj2->important_value = '$obj2 изменил свойство'; // меняем свойство
var_dump($obj1, $obj2); // оно изменилось и у первого объекта и у второго

