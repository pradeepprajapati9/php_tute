<?php

// FECTORIAL NUMBER
// 5 KA FECTORIAL NUMBER
// $n=5;
//  $f=1;
//  for ($i=1; $i <= $n; $i++) {
//     $f = $f * $i;
//     echo '=>'.$f;
//   }



// for($i=0;$i<=5;$i++){
//   for($j=1;$j<=$i;$j++){
//   echo $j;
//   }
//   echo "<br>";
// }
//

// $e=1;
//  for($i=0;$i<4;$i++){
//    for($j=0;$j<=$i;$j++){
//       echo $e."";
//       $e++;
//    }
//    echo "<br>";
//  }


for ($i=0;$i<=5;$i++) {
    for ($j=1;$j<=$i;$j++) {
        echo $i;
    }
    echo "<br>";
}


// how to do swap valued in php
echo "<br>";
echo "<br>";
echo "<br>";

// it is wihout third variable
$a=10;
$b=20;

$a=$a+$b; //30
$b=$a-$b;//10
echo $b,"<br>";
$a=$a-$b;
echo $a;//20

// it is use third variable
echo "<br>";
echo "<br>";
$x=10;
$y=20;
$z=$x;
$x=$y;
echo $x,"<br>";
$y=$z;
echo $y;
