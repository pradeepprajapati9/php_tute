<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Access Modifire</h1>
<table border>
    <tr>
        <th >HEADING</th>
        <th >Class Itself</th>
        <th>Outside Class</th>
        <th>Derived Class</th>
    </tr>
    <tr>
        <th>Public</th>
        <td>use</td>
        <td>use</td>
        <td>use</td>
    </tr>
    <tr>
        <th>protected</th>
        <td>use</td>
        <td>not use</td>
        <td>use</td>
    </tr>
    <tr>
        <th>Private</th>
        <td>use</td>
        <td>not use</td>
        <td>not use</td>
    </tr>
</table>
</body>

<?php
// public
class friend
{
    public $Friend;
    public function __construct($Fr)
    {
        $this->Friend=$Fr;
    }   
    public function show()
    {
        echo "Hello My Friend ".$this->Friend;
        echo "Your Name Is  ".$this->Friend;
    }
}
$Frnd=new friend('Sandeep');
$Frnd->show();

// protected
// class device{
//     protected $Mobile;
//     protected $Ear;
//     protected $Char;
//     protected $Machine;

//     public function __construct($Mobile,$Ear,$Char,$Machine){
//       $this->Mobile=$Mobile;
//       $this->Ear=$Ear;
//       $this->Char=$Char;
//       $this->Machine=$Machine;
//     }
//     protected function Callmethod(){
//       echo "<h1>This Is Constructer Function Called</h1>";
//      echo " Mobile Name= ".$this->Mobile."<br>";
//      echo " Earpone Name= ".$this->Ear."<br>";
//      echo " Charger Name =".$this->Char."<br>";
//      echo " Machine Name =".$this->Machine."<br>";
//     }

//    }


// class secdevice extends device{
//     public function Callmethodsec(){
//       echo "<h1>This Is secdevice class of Constructer Function Called</h1>";
//       echo " Mobile Name= ".$this->Mobile."<br>";
//       echo " Earpone Name= ".$this->Ear."<br>";
//       echo " Charger Name =".$this->Char."<br>";
//       echo " Machine Name =".$this->Machine."<br>";
//     }
//   }

//   $deviceObjectsec=new secdevice("Moto","Boat","JBL","Faster","Dell");
//   $deviceObjectsec->Callmethodsec();


//   private
class device
{
    private $Mobile;
    private $Ear;
    private $Char;
    private $Machine;

    public function __construct($Mobile, $Ear, $Char, $Machine)
    {
        $this->Mobile=$Mobile;
        $this->Ear=$Ear;
        $this->Char=$Char;
        $this->Machine=$Machine;
    }
    public function Callmethod()
    {
        echo "<h1>This Is Constructer Function Called</h1>";
        echo " Mobile Name= ".$this->Mobile."<br>";
        echo " Earpone Name= ".$this->Ear."<br>";
        echo " Charger Name =".$this->Char."<br>";
        echo " Machine Name =".$this->Machine."<br>";
    }
}

$deviceObject=new device("Moto", "Boat", "JBL", "Faster", "Dell");
$deviceObject->Callmethod();

class secdevice extends device
{
    public function Callmethodsec()
    {
        // we can't access the variable private from base class
        echo "<h1>This Is secdevice class of Constructer Function Called</h1>";
        echo " Mobile Name= ".$this->Mobile."<br>";
        echo " Earpone Name= ".$this->Ear."<br>";
        echo " Charger Name =".$this->Char."<br>";
        echo " Machine Name =".$this->Machine."<br>";
    }
}

$deviceObjectsec=new secdevice("Moto", "Boat", "JBL", "Faster", "Dell");
$deviceObjectsec->Callmethodsec();
?>
</html>