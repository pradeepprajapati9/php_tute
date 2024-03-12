<?php
// combine file both in this file
require './first.php';
require './second.php';

$obj= new pro\product();
$obj->abc();
$obj1= new testing\product();
$obj1->abc();

?>