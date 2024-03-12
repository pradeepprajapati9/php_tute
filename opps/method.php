<?php
// how to make static variablea and functio and print in opps
class math
{
    public static $name = " pradeep ";
    public static function text()
    {
        echo  " hello " . self::$name;
    }

    public function __construct($sn)
    {
        self::$name = $sn;
    }
}
echo math::$name;
math::text();   //for static method

$math1 = new math(" wow ");
$math1->text();  //for construct method

//  how to use static member inheritance method 
//  and static method use you don't need to make object class you can print

class cs
{
    public static $fn = "suneel";
}

class maya extends cs
{
    public static function text()
    {
        echo parent::$fn;
    }
}

$test = new maya();
$test->text();


// late static binding in php

class csv
{
    public static $fn = "sunny";

    public static function text()
    {
        echo static::$fn;  // sudheer ke liye 
        echo self::$fn;  // sunny ke liye
    }
}

class mayur extends csv
{
    public static $fn = "sudheer";
}

$testy = new mayur();
$testy->text();


//  how to use trait opps in  phph
echo "<br>";
echo "<br>";
trait abc
{
    public function real()
    {
        echo " Realme 7 pro <br> ";
    }
    public function realme()
    {
        echo " Realme 9 pro<br> ";
    }
}
trait xyz
{
    public function realty()
    {
        echo " Mi 6 pro <br>";
    }
    public function dublicate()
    {
        echo "Mi  7 pro <br>";
    }
}
class base
{
    use abc, xyz;
}

$base1 = new base();
$base1->real();
$base1->realme();
$base1->realty();
$base1->dublicate();


// how to use overrides traits methodin php
trait hi
{
    public function say()
    {
        echo 'say from hi';
    }
}
trait hey
{
    public function say()
    {
        echo 'say from hey';
    }
}
class basic
{
    //use hi,hey;       // give errot so mathod next
    use hi, hey {
        hi::say insteadof hey;   //means hey ki bajay hi ke jo say() h usko print kro
        hey::say as seat;        // means hey ke ander jo say() usko rename kr diya seat() me
    }
}
$basic1 = new basic();
$basic1->say();
$basic1->seat();


// type hunting 
function sum(int $v)
{    // int is type hunting
    echo $v + 10;
}
sum(20);


//  chaining method
class budget
{
    public function mob()
    {
        echo " this is mobile\n";
        return $this; //Call to a member function
    }
    public function earphone()
    {
        echo " this is earphone\n";
        return $this;  //Call to a member function

    }
    public function laptop()
    {
        echo " this is laptop\n";
        return $this; //Call to a member function

    }
    public function wire()
    {
        echo " this is wire\n";
        return $this; //Call to a member function

    }
}

$all = new budget();
$all->mob()->earphone()->laptop()->wire(); // Call to a member function like this


// magic mathod in php
// 1 __construct()
// 2 __destruct()
// 3 __get()
// 4 __set()
// 5 __isset()
// 6 __unset()
// 7 __autoload()
// 8 __clone()
// 9 __sleep()
// 10 __wakeup()
// 11 __call()
// 12 __callStatic()
// 13 __toString()
// 14 __invoke()


echo "<br><br>";
// how to use __destruct method
class sql
{
    public function __construct()
    {
        echo ".this is construct function<br> ";
    }
    public function qry()
    {
        echo ".this is funtion <br>";
    }
    // public function __destruct(){
    //     echo ".this is destruct function  its use for last when all work completed then he work now <br><br>";
    // }
}
$sql1 = new sql();
$sql1->qry();



echo "<br>";
// how to use __get

class arr
{
    public $data = ["name" => "pradeep", "age" => "25", "degree" => "bca"];
    public function __get($key)
    {
        if (array_key_exists($key, $this->data)) {
            return $this->data[$key];
        } else {
            echo  "this ($key) not exists in this";
        }
    }
}

$arr1 = new arr();
echo $arr1->name;

echo "<br>";
// how to use __set
class values
{
    private $data;
    public function sh()
    {
        echo $this->data;
    }
    public function __get($property)
    {
        echo " youn did not access private property from object";
    }
    public function __set($property, $value)
    {
        if (property_exists($this,/*class*/ $property)) {
            $this->$property = $value;
        } else {
            echo "propety does not exists($property)";
        }
    }
}

$ar1 = new values();
$ar1->data = "get values is set ";
$ar1->sh();


echo "<br>";
// how to use __call
class student
{
    private $user_name;
    private $user_age;

    private function setName($u_name, $u_age)
    {
        $this->user_name = $u_name;
        $this->user_age = $u_age;
    }

    public function view()
    {
        echo  $this->user_name;
        echo  $this->user_age;
    }
    public function __call($method, $args)
    {
        if (method_exists($this, $method)) {
            call_user_func_array([$this, $method], $args);
        } else {
            echo "does not exists $method";
        }
    }
}

$student1 = new student();
$student1->setName(" yahoo baba ", 25);
$student1->view();


echo "<br>";
// how to use __callStatic

class calling
{
    private static function setNames($names)
    {
        echo $names;
    }
    public static function __callStatic($method1, $args1)
    {
        if (method_exists(__class__, $method1)) {

            call_user_func_array([__class__, $method1], $args1);
        } else {
            echo "does not exists $method1";
        }
    }
}

calling::setNames("yahoo baba");


echo "<br>";
// how to use __isset

class issetvalue
{
    private $course;
    private $course_du;
    private $car = ["carname" => "bmw", "modal" => "2015", "color" => "black"];

    public function setNam($courses, $c_du)
    {
        $this->course   = $courses;
        $this->course_du = $c_du;
    }

    public function __isset($pro)
    {
        //  echo isset($this->$pro);
        echo isset($this->car[$pro]);
    }
}

$stu = new issetvalue();
$stu->setNam("php", "1 month");
echo isset($stu->carname);

echo "<br>";
// how to use __unset
class unsetvalue
{
    private $key;
    private $mouse;
    public function setNa($keyboard, $mouses)
    {
        $this->key   = $keyboard;
        $this->mouse = $mouses;
    }
    public function __unset($pros)
    {
        unset($this->$pros);
    }
}

$stuid = new unsetvalue();
$stuid->setNa("dell", "logitech");
unset($stuid->key);  // this variable has been destroy 'key'
print_r($stuid);



echo "<br>";
// how to use __toString
class tovalue
{
    public function __toString()
    {
        return "can't print object as a sting ";
    }
}

$string = new tovalue();
echo $string;

echo "<br>";
// how to use __sleep
class slipvalue
{
    private $pro;
    private $id;
    private $customer;
    public function setval($prod, $id, $custo)
    {
        $this->pro   = $prod;
        $this->id = $id;
        $this->customer = $custo;
    }
    public function __sleep()
    {
        return array('pro', 'id', 'customer');
    }
}

$slip = new slipvalue();
$slip->setval("laptop", 1, "matiber");
$srl = serialize($slip); //convert to array  sleep method when you seliaize of class then function automatically run sleep()
echo $srl;

echo "<br>";
// how to use __wakeup


class wakevalue
{
    private $pr;
    private $i;
    private $cust;
    public function setvalue($pr, $i, $cust)
    {
        $this->pr   = $pr;
        $this->i = $i;
        $this->cust = $cust;
    }
    public function __sleep()
    {
        return array('pr', 'i', 'cust');
    }
    public function __wakeup()
    {
        echo "this is unserialize method ";
    }
}
$wake = new wakevalue();
$wake->setvalue("mobile", 2, "autar");
$srle = serialize($wake);
$unsrl = unserialize($srle);
echo $srle;


echo "<br>";
// how to use __clone
class institute
{
    public $tname;
    public $diploma;
    public function __construct($tname)
    {
        $this->tname = $tname;
    }
    public function setcourses(course $c)
    {
        $this->diploma = $c;
    }
    public function __clone()
    {
        $this->diploma = clone $this->diploma;
    }
}
class course
{
    public $tcourse;
    public function __construct($cn)
    {
        $this->tcourse = $cn;
    }
}
$institute1 = new institute("Sanjay");
$course1 = new course("php");

$institute1->setcourses($course1);
$institute2 = clone $institute1;

$institute2->tname = " Ram kumar ";
$institute2->diploma->tcourse = "  python ";

print_r($institute1);
print_r($institute2);

echo "<br>";
// how to use __invoke

class cal
{
    public $a;
    public $b;
    public function __construct($add, $ad)
    {
        $this->a = $add;
        $this->b = $ad;
    }
    public function sum()
    {
        echo $this->a + $this->b;
    }
    public function __invoke()
    {
        // echo "not call object as function";
        echo $this->a + $this->b;
    }
}

$cal1 = new cal(25, 36);
// $cal1->sum();
$cal1();   // when you call object as a funtion then invoke auto cal function


echo "<br>";
// how to use __constants
echo "LINE NUMBER :" . __LINE__ . "<br>";
echo "THE FULL PATH OF THIS FILE :" . __FILE__ . "<br>";
echo "THE FULL PATH OF THIS DIRECTRY :" . __dir__ . "<br>";
function pradeep()
{
    echo "THE FUNCTION NAME is :" . __FUNCTION__ . "<br>";
}
pradeep();

class get
{
    public  function Name()
    {
        echo "THE CLASS NAME is :" . __CLASS__ . "<br>";
    }
}
$get1 = new get();
$get1->Name();

class set
{
    public  function Names()
    {
        echo "THE METHOD NAME is :" . __METHOD__ . "<br>";
    }
}
$get2 = new set();
$get2->Names();


// namespace  mobile;
class satish
{
    public  function getNames()
    {
        echo "THE NAMESPACE NAME is :" . __NAMESPACE__ . "<br>";
    }
}
$satish1 = new satish();
$satish1->getNames();
