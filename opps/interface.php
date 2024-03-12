<?php
// Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism" 
// you can't define property in interface and not make object

interface a
{
    function hello($n);
}
interface b
{
    function hi($n);
    function by();
}

class c implements a, b
{

    public function hello($n)
    {
        echo "hello" . $n;
    }

    public function hi($n)
    {
        echo "hi" . $n;
    }

    public function by()
    {
        echo "by";
    }
}

$c1 = new c();
$c1->hello(10);
$c1->hi(12);
$c1->by();


interface market
{
    function bajar($Inderpuri, $Kirishikunj, $Veerwar);
    function device($Inderpuri, $Kirishikunj, $Veerwar);
}

interface marketplace
{
    function machine($Inderpuri, $Kirishikunj, $Veerwar);
}

interface marketpalm
{
    function electronic($Inderpuri, $Kirishikunj, $Veerwar);
}



class allbajar implements market, marketPlace, marketpalm
{
    public $Inderpuri;
    public $Kirishikunj;
    public $Veerwar;

    public function __construct($Inderpuri, $Kirishikunj, $Veerwar)
    {
        echo "<h1>This is Abstract Function called</h1>";
        echo "Where is " . $this->$Inderpuri . "<br>";
        echo "Where is " . $this->$Kirishikunj . "<br>";
        echo "Where is " . $this->$Veerwar . "<br>";
    }


    public function bajar($Inderpuri, $Kirishikunj, $Veerwar)
    {
        echo "<h1>This is  Bajar Function Called</h1> ";
        echo $Inderpuri;
        echo $Kirishikunj;
        echo $Veerwar;
    }
    public function device($Inderpuri, $Kirishikunj, $Veerwar)
    {
        echo "<h1>This is  device Function Called </h1>";
        echo $Inderpuri;
        echo $Kirishikunj;
        echo $Veerwar;
    }
    public function machine($Inderpuri, $Kirishikunj, $Veerwar)
    {
        echo "<h1>This is  Machine Function Called </h1>";
        echo $Inderpuri;
        echo $Kirishikunj;
        echo $Veerwar;
    }
    public function electronic($Inderpuri, $Kirishikunj, $Veerwar)
    {
        echo "<h1>This is  Electronic Function Called </h1>";
        echo $Inderpuri;
        echo $Kirishikunj;
        echo $Veerwar;
    }
}

$marketBajar = new allbajar(1,2,3);
$marketBajar->bajar("Inderpuri Naraina", "Kirishikunj Shadipur", "Veerwar patel Nagar");
$marketBajar->device("Inderpuri Naraina", "Kirishikunj Shadipur", "Veerwar patel Nagar");
$marketBajar->machine("Inderpuri Naraina", "Kirishikunj Shadipur", "Veerwar patel Nagar");
$marketBajar->electronic("Inderpuri Naraina", "Kirishikunj Shadipur", "Veerwar patel Nagar");
