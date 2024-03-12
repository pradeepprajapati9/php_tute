<!-- index array -->

<?php
$Device=array("ID","NAME","PRICE","CATAGORY","DESCRIPTION");
$Device=["ID","NAME","PRICE","CATAGORY","DESCRIPTION"];

// print_r($Device);

// echo $Device[0];
// echo $Device[1];
// echo $Device[2];
// echo $Device[3];
// echo $Device[4];

for ($i=0;$i<=4;$i++) {
    echo $Device[$i];
}

echo "<br>";
echo "<br>";
?>

<!-- accociate array -->
<?php
$Item=array("Id"=>"1","Biskut"=>"250","Company"=>"GoldyRank","City"=>"Delhi");

// print_r($Item);

// echo $Item["Id"];
// echo $Item["Biskut"];
// echo $Item["Company"];
// echo $Item["City"];

foreach ($Item as $key=>$Product) {
    echo $key."=>".$Product;
    echo "<br>";
}
?>

<!-- multidemontional array -->

<?php
echo "<br>";
$Multi=array(
   array("ID","NAME","PRICE","CATAGORY","DESCRIPTION"),
   array("ID","NAME","PRICE","CATAGORY","DESCRIPTION"),
   array("ID","NAME","PRICE","CATAGORY","DESCRIPTION"),
   array("ID","NAME","PRICE","CATAGORY","DESCRIPTION"),
);

// echo "<pre>";
// print_r($Multi);
// echo "</pre>";

echo $Multi[0][0];
echo $Multi[0][1];
echo $Multi[0][2];
echo $Multi[0][3];
echo $Multi[0][4];
echo "<br>";
echo $Multi[1][0];
echo $Multi[1][1];
echo $Multi[1][2];
echo $Multi[1][3];
echo $Multi[1][4];

// error_reporting(0);
for ($row=0;$row<=4;$row++) {
    for ($col=0;$col<=3;$col++) {
        // echo $Multi[$row][$col];
    }
}
echo "<br>";
echo "<br>";
?>

<!-- accociative with multidemontional array -->

<?php

$MultiDemon=array(
 "Mobile"=>array("ID"=>"1","PRICE"=>"22000","COMPANY"=>"VIVO"),     
 "Cammera"=>array("ID"=>"1","PRICE"=>"25000","COMPANY"=>"NIKON"),     
 "Laptop"=>array("ID"=>"1","PRICE"=>"35000","COMPANY"=>"DELL"),     
 "Charger"=>array("ID"=>"1","PRICE"=>"200","COMPANY"=>"MTR")    
);

// echo "<pre>";
// print_r($MultiDemon);
// echo "</pre>";

echo $MultiDemon["Mobile"]['ID'];
echo $MultiDemon["Mobile"]['PRICE'];
echo $MultiDemon["Mobile"]['COMPANY'];
echo "<br>";
echo $MultiDemon["Mobile"]['ID'];
echo $MultiDemon["Mobile"]['PRICE'];
echo $MultiDemon["Mobile"]['COMPANY'];

echo "<br>";
echo "<br>";

foreach($MultiDemon as $key=>$value){
 echo $key;
 echo "<br>";
 foreach($value as $val){
   echo $val;
 }
}
    
?>