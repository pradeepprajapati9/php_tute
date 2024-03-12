<?php
// FIRST 
echo "SINGLE PARAMERTER";
echo "<br>";

class person{
     public $name;
    function msg(){
         echo "your name is : ".$this->name;
    }
} 
$p1=new person();
$p1->name="pradeep";
$p1->msg();

echo"<br>";

// SECOND
echo "MULTIPLE PARAMERTER";
echo "<br>";

class pers{
     public $name ,$age;
    function msg(){
         echo "your name is : ".$this->name. "<br>" ." your age  is ".$this->age;
    }
} 

$p2=new pers();
$p2->name="sumit";
$p2->age=20;
$p2->msg();

echo "<br>";
// THIRD
// WHICH PRIORITY IS MOST
echo "WHICH PRIORITY IS MOST";
echo "<br>";

class priority{
    public $name="pradeep";
    public $age=25;
   function msg(){
        echo "your name is : ".$this->name. "<br>" ." your age  is ".$this->age;
   }
} 

$p3=new priority();
// $p2->name="sumit";
$p3->age=30;
$p3->msg();

echo "<br>";
// constructor
echo "CONSTRUCTOR";
echo "<br>";

class First{
    public $name="pradeep";
    public $age=25;
    function __construct($name,$age){
       $this->name=$name;
       $this->age=$age;
    }
   function msg(){
        echo "your name is : ".$this->name. "<br>" ." your age  is ".$this->age;
   }
} 

$p4=new First("Mouse",12);
 
$p4->msg();

echo "<br><br>";
class user{
     public $id,$pass;
     function __construct($U_id,$U_pass){
        $this->id=$U_id;
        $this->pass=$U_pass;
     }
     function show(){
          echo "This Is Your Id :=".$this->id."<br>";
          echo "This Is Your Password:=".$this->pass;
     }

}
$user1=new user(3546,"Pradeep@#125");
$user1->show(); 
?>