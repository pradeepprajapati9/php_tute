<?php
 class method{
 }
 if(class_exists('method')){
    echo "yes";
 }else{
    echo "no";
 }



 interface myinterface{
 }
 
 if(interface_exists('myinterface')){
    echo "yes";
 }else{
    echo "no";
 }


class sorry{  
    public function seat(){
    }
} 
 $mathc1=new sorry();
 if(method_exists($mathc1,'seat')){
    echo "yes";
 }else{
    echo "no";
 }

 trait image{
 public function save(){
 }
}
if(trait_exists('image')){
    echo "yes";
 }else{
    echo "no";
 }
 
 class  aged{
    public $age;
}
if(property_exists('aged','age')){
    echo "yes";
 }else{
    echo "no";
 }
 


class  classes{
    public $age;
}
$obj= new classes();
if(is_a($obj,'classes')){  // this object this class y/n 
    echo "yes";
 }else{
    echo "no";
 }
 


 class  parnt{

}
class child extends parnt{

}
$obj1=new child();
if(is_subclass_of($obj1,'parnt')){  // is  obj class is sub class of parnt

    echo "yes";
 }else{
    echo "no";
 }

 
 echo "<br>";
// get metod in opps 

class wire{
    public function m(){
   echo "this class  name is:".get_class($this);
    }
}
$wire1=new wire();
$wire1->m();
echo "this class  name is:".get_class($wire1);  


echo "<br>";
class abc{
    
}
class xyz extends abc {
    public function n(){
   echo "this parent class  name is:".get_parent_class($this);

    }
}
$wire2=new xyz();
$wire2->n();    
echo "this parent class  name is:".get_parent_class('xyz');

echo "<br>";
class abcd {
    public function __construct(){
    }
    public function ab(){
    }
    public function cd(){
    }
}
$wire3=new abcd();
$class_method=get_class_methods("abcd");
// print_r($class_method);
foreach($class_method as $val){
    echo $val ."\n"; 
}

class abcde {
    public $n="this";
    public $c="this";
    private $b="this";
    public function __construct(){ 
        // print_r(get_class_vars(__CLASS__))."<br>";
     print_r(get_object_vars($this)); 

       }
}
  
$wire4=new abcde();
// $class_metho=get_class_vars(get_class($wire4));
// print_r($class_metho);
$class_meth=get_object_vars($wire4);
// print_r($class_meth);

echo"<br>";

class any{
   static public function hmm(){
  var_dump(get_called_class());
   } 

}
class okay extends any {
     
}
any::hmm();
okay::hmm();   // which class for call  

echo "<br>";
echo "<br>";
echo "classes<br>";
echo "<br>";



class phone{
      
 }
 class sim extends phone {
      
 }
print_r(get_declared_classes()); 

echo "<br>";
echo "<br>";
echo "interfaces<br>";
echo "<br>";


interface phon{
      
}
print_r(get_declared_interfaces()); 

echo "<br>";
echo "<br>";
echo "traits<br>";
echo "<br>";


trait beans{

}
print_r(get_declared_traits());

echo "<br>";

class rename{
    public $test;
}

class_alias('rename','mcb'); // making two class  from use this class_alias

$ren=new rename();
$b=new mcb();
$b->test="rename is";
echo $b->test;

?>