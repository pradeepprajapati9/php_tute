<style>
  *{
   font-family:sans-serif;
   font-weight:bold;
   font-size:20px;
  }
</style>

<?php
// how to define class

class calculator{

   public $a=10;
   public $b=10;
   public $c="";

   public function sum(){
    $this->c=$this->a+$this->b;
    return $this->c;
   }
   public function sub(){
    $this->c=$this->a.$this->b;
    return $this->c;
   } 
    
}
$cal=new calculator();
echo $cal->sum();
$cal->a=" pradeep";
$cal->b="kumar";

echo "<pre>";
print_r($cal);
echo "</pre>";
echo $cal->sub();


// define construct function
class device{
 public $Mobile;
 public $Ear;
 public $Char;
 public $Machine;
 
 public function __construct($Mobile,$Ear,$Char,$Machine){
   $this->Mobile=$Mobile;
   $this->Ear=$Ear;
   $this->Char=$Char;
   $this->Machine=$Machine;
 }
 public function Callmethod(){
   echo "<h1>This Is Constructer Function Called</h1>";
  echo " Mobile Name= ".$this->Mobile."<br>";
  echo " Earpone Name= ".$this->Ear."<br>";
  echo " Charger Name =".$this->Char."<br>";
  echo " Machine Name =".$this->Machine."<br>";
 }

}

$deviceObject=new device("Realme 7 Pro","Appli Earburds","MTR Charger","Tulsi");
$deviceObject->Callmethod();

// how to inheritance
// if you want to use parent property and method in child class then you can use this method 
// like inheritance
 
// i want to use above device class property and method 
class secdevice extends device{
  public function Callmethodsec(){
    echo "<h1>This Is secdevice class of Constructer Function Called</h1>";
    echo " Mobile Name= ".$this->Mobile."<br>";
    echo " Earpone Name= ".$this->Ear."<br>";
    echo " Charger Name =".$this->Char."<br>";
    echo " Machine Name =".$this->Machine."<br>";
  }
}

$deviceObjectsec=new secdevice("Moto","Boat","JBL","Faster","Dell");
$deviceObjectsec->Callmethodsec();



// how to use static in php
echo "<br>";
class mouse{
  public static $wire="Pradeep";
  public static $button="Sandeep";
  public static $scroll="Sunny";
  public  function __construct($wire,$button,$scroll){
    self::$wire=$wire;
    self::$button=$button;
    self::$scroll=$scroll;
  }
  public static function showmouse( ){
    echo"This is Static Function<br>";
    echo "Wire Name ".self::$wire."<br>";
    echo "Button Name ".self::$button."<br>";
    echo "Scroll Name ".self::$scroll."<br>";
  }
}
mouse::showmouse();

// how to define static member in baseclass
echo "<br>";
class username extends mouse{
  public static function souser( ){
    echo"This is Base class  Function<br>";
    echo "Wire Man Name ".parent::$wire."<br>";
    echo "Machanic Name ".parent::$button."<br>";
    echo "Programmer Name ".parent::$scroll."<br>";
  }
}

$user=new username("nihal","rahul","lucky");
$user->souser();


echo "<br>";
class electric{
  public static $laptopbrnad="Hp"; 
  public static $laptopkey="Dell"; 
  public  function __construct($laptopbrnad,$laptopkey){
    self::$laptopbrnad=$laptopbrnad;
    self::$laptopkey=$laptopkey;
  }
  public static function get(){
    echo "this is laptop and keyboard<br>";
    echo "Laptop Brand Name ". self::$laptopbrnad."<br>";
    echo "Keyboard Brand Name ". self::$laptopkey."<br>";
  }
}
electric:: get();

echo "<br>";
class bank extends electric{
  public static function get(){
    echo "This is Bank  and Atm Detail<br>";
    echo "Bank Name ". self::$laptopbrnad."<br>";
    echo "Atm Name ". self::$laptopkey."<br>";
  }
}

$bank=new bank("CBI Bank","SBI Bank");
$bank->get();



// how to use traits
echo "<br>";

trait itsector{
   public $Fname;
   public $lname;
   public $Tname;

  public function __construct($Fname,$lname,$Tname){
     $this->Fname=$Fname;
     $this->lname=$lname;
     $this->Tname=$Tname;
  }
  public function soft(){
    echo "This is software Functon called<br>";
    echo "Fname".$this->Fname."<br>";
    echo "Lname".$this->lname."<br>";
    echo "Tname".$this->Tname."<br><br>";
  }

  public function hard(){
    echo "This is Hardware Functon called<br>";
    echo "Fname".$this->Fname."<br>";
    echo "Lname".$this->lname."<br>";
    echo "Tname".$this->Tname."<br><br>";
  }
}

trait stock{
  public function socialmedia(){
    echo "This is socialmedia Functon called<br>";
    echo "Fname".$this->Fname."<br>";
    echo "Lname".$this->lname."<br>";
    echo "Tname".$this->Tname."<br><br>";
  }

  public function stockmarket(){
    echo "This is stockmarket Functon called<br>";
    echo "Fname".$this->Fname."<br>";
    echo "Lname".$this->lname."<br>";
    echo "Tname".$this->Tname."<br><br>";
  }
}

class derrive{
  use itsector,stock;
}

$itsector=new derrive("webdevelper","Grow","Wood");
$itsector->soft();
$itsector->hard();
$itsector->socialmedia();
$itsector->stockmarket();

?>