<?php
include('./database.php');
$database1= new database();

// $database1->Insert('study',['NAME'=>'pradeep','AGE'=>'21','GENDER'=>'Male']);
// echo "Insert Result is:";
// ($database1->getResult());

// $database1->Update('study',['NAME'=>'Kuldeep','AGE'=>'30','GENDER'=>'Male'],'Id="2"');
// echo "Update Result is:";
// ($database1->getResult());

// $database1->Delete('study','Id="2"');
// echo " Delete Result is: ";
// ($database1->getResult());

// $database1->Sql('SELECT * FROM study');
// echo " Sql  Result is: ";
// print_r($database1->getResult());

$database1->Select('study',' * ' ,null,null,null,null);
echo " Select Result is: ";
print_r($database1->getResult());

$database1->pagination('study',null,null,null);
 
?>