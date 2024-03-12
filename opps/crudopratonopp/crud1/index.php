<?php

 include './database.php';

 $datab=new database();

 //  $datab->insert('ragister',['NAME'=>'Shital','EMAIL'=>'shital12@gmail.com','PSD'=>'Shital@12','PHNUM'=>'852568369']);
 // echo "record inserted";
 // print_r($datab->getResult());

 // $datab->update('ragister',['NAME'=>'Ragni','EMAIL'=>'ragnil12@gmail.com','PSD'=>'Ragni@12458','PHNUM'=>'458555469'],'Id="10"');
 // echo "record updated";
 // print_r($datab->getResult());

 $datab->delete('ragister', 'Id="11"');
 echo "record deleted";
 print_r($datab->getResult());
