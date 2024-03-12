<?php
// class
class cal{
    public $a,$b,$c;
    function sum(){
        $this->a= $this->b+ $this->c;
        return $this->a;
    }

    function sub(){
        $this->a=$this->b - $this->b;
        return $this->a;
    }
}

$c1=new cal();
$c1->b=40;
$c1->c=40;

$c2=new cal();
$c2->b=40;
$c2->c=40;

echo "sum value c1=".$c1->sum()."<br>";

echo "sum value c2=".$c2->sub()."<br>";



class boss{
    public $employe,$junior;
    function emp(){
        echo "this is employe" .$this->employe;
    }
    function jun(){
        echo "this is junior" .$this->junior;
    }
}

$boss1=new boss();
$boss1->employe =" woner<br> ";
$boss1->junior =" woner ";
$boss1->emp();
$boss1->jun();
?>