<?php
//function __autoload(){}  //not sport in my browser so i use this->

spl_autoload_register(function($class){
 include "autoload/" .$class. ".php";
});

$test= new third();
$test->ghi();
$te= new second();
$te->def();
$t= new first();
$t->abc();
?>