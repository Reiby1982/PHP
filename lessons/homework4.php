<?php
/*
Дом строется со следующими характеристиками: 
Что из низ задается через конструктор, а что потом - решайте сами 
1. какое-то количество подъездов 
2. какое-то количество этажей 
3. какое-то количество квартир на этаже 
4. адрес 
У дома должна быть возможность сообщить, сколько в нем квартир - метод 
У дома должна быть возможность показать адрес - метод 
У дома должна быть возможность сообщить, сколько людей в нем живет - метод 

Есть очередь людей (массив с объектами класса Human), 
каждый хочет заселиться в дом , но у каждого есть пожелание - этажность дома! 

Одновременно в дом можно заселить троих. 
$house->add(); при вызове этого метода можно заселить только 3х людей 

Людей из списка можно заселять в дом (по квартире на человека), 
если в нем есть еще свободные квартиры 
и если их пожелание можно учесть (желаемый этаж должен быть в доме). 

Если человека нельзя поселить, потому что его пожелание не выполняется, 
он перемещяется в конец очереди. 
Если не хватило места - остается на прежнем месте, ждать нового дома*/

class Home 
{
    public $entrance;
    public $floor;
    public $apartment_on_flor;
    public $adress;
    
    function __construct ($entrance, $floor, $apartment_on_flor) 
    {
        $this->entrance = $entrance;
        $this->floor = $floor;
        $this->apartment_on_flor = $apartment_on_flor;
    }
    
    function iformApartments () 
    {
        $all_apartment = $this->apartment_on_flor *  $this->floor * $this->entrance;
        echo "<br>В доме по адресу " . $this->adress . " построено " . $all_apartment . " квартир <br>";
    }
    function showAdress () 
    {
        echo "<br> Запрашиваемый дом по адресу: " . $this->adress . "<br>";
    }
}

$home1 = new Home(1, 2, 3);

$home1->adress = "ул. Первая д.1";
var_dump($home1);
$home1->iformApartments ();
$home1->showAdress();

$home2=new Home(5, 5, 4);
$home2->adress = "ул. Вторая д.1";
$home2->iformApartments ();
$home2->showAdress();

class Human
{
    public $name; 
    public $wished_flor; 

    function __construct($name,$wished_flor)
    {
        $this->name = $name;
        $this->wished_flor = $wished_flor;
    }
}
$queue = [
    new Human('Света', 1),
    new Human('Ваня', 1),
    new Human('Женя', 1),
    new Human('Катя', 1),
    new Human('Петя', 1),
    new Human('Гоша', 1)
];
var_dump($queue);