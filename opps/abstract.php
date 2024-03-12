<?php

// if you make a abstract calss then you can't make object you make a one base class for print the result  and must abstract method make in abstract class


 abstract class message
 {
     public $name;
     abstract protected function show($a, $b, $c);
 }
 class msg extends message
 {
     public function show($d, $e, $f)
     {
         echo "<h1>employee profile</h1>";
         echo "employee = $d "."<br>";
         echo "employee = $e "."<br>";
         echo "employee = $f "."<br>";
     }
 }
$msg1=new msg();
 $msg1->show("Harendra", 25, 9953183126);





 abstract class market{
    public $Inderpuri;
    public $Kirishikunj;
    public $Veerwar;
    abstract protected function MarketPlace($Inderpuri,$Kirishikunj,$Veerwar); //just declaear not implements
 }

 class bajar extends market{
    public function MarketPlace($Inderpuri,$Kirishikunj,$Veerwar){
     echo "<h1>This is Abstract Function called</h1>";
     echo "Where is ".$Inderpuri."<br>";
     echo "Where is ".$Kirishikunj."<br>";
     echo "Where is ".$Veerwar."<br>";
    }
 }
 $marketBajar=new bajar();
 $marketBajar->MarketPlace("Inderpuri Naraina","Kirishikunj Shadipur","Veerwar patel Nagar");
 ?>

