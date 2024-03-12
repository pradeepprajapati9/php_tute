<?php

 class emp{
    public $name;
    public $age;
    public $salary;
    function __construct($n,$a,$s){
        $this->name=$n;
        $this->age=$a;
        $this->salary=$s;
    }
    function info(){
        echo "<h3>Employee Salary</h3>";
        echo "Employee Name :".$this->name."<br>";
        echo "Employee Age :".$this->age."<br>";
        echo "Employee Salary :".$this->salary."<br>";
    }
 }

 $e1=new emp("Pradeep",25,35000);
 $e1->info();
 

class manager extends emp{
    function info(){
        echo "<h3>Manager Salary</h3>";
        echo "Manager Name :".$this->name."<br>";
        echo "Manager Age :".$this->age."<br>";
        echo "Manager Salary :".$this->salary."<br>";
    }
}
$m1=new manager("Krishna",30,30000);
$m1->info();


class boss extends manager{
      function information(){
        echo "<h3>Boss Salary</h3>";
        echo "Boss Name :".$this->name."<br>";
        echo "Boss Age :".$this->age."<br>";
        echo "Boss Salary :".$this->salary."<br>";
      }
}
$boss1=new boss("prdeep",21,1000000);
$boss1->information();


 
?>