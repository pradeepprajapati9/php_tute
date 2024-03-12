<?php
include('./database.php');
$database1= new database();

$name=$_POST['Fname'];
$age=$_POST['Age'];
$gender=$_POST['Gender'];

$value=['NAME'=>$name, 'AGE'=>$age,'GENDER'=>$gender];
 if($database1->Insert("study",$value)){
    echo "Data Insert successfuly";
 }else{
    echo "Data Not Insert";
 }
 header("location: http://localhost/prectice/php/opps/crud/");
?>