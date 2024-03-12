<?php

// for ($i=1;$i<=5;$i++) { //row
//     for ($j=1;$j<=5;$j++) { //col
//         echo "*";
//     }
//     echo "<br>";
// }

// for ($a=1;$a<=4;$a++) {
//     for ($b=1;$b<=8;$b++) {
//         echo "*";
//     }
//     echo"<br>";
// }

// for ($c=0;$c<=5;$c++) {
//     for ($d=5-$c;$d>=1;$d--) {
//         echo $d;
//     }
//     echo "<br>";
// }

// for($e=0;$e<=5;$e++){ //0
//     for($f=1;$f<=5-$e;$f++){
//            echo $f;
//     }
//     echo "<br>";
// }

// for($ab=1;$ab<=10;$ab++){
//     for($bc=1;$bc<=12;$bc++){
//     echo $bc;
//     }
//     echo "<br>";
// }

//  for($i=1;$i<=10;$i++){
//  for($j=1;$j<=10;$j++){
//     echo ($i-1)*10+$j;
//  }
//  echo "<br>";
//  }

echo "<br>";

//  for($a=1;$a<=5;$a++){
//     for($b=1;$b<=$a;$b++){
//        echo $b;
//     }
//     echo "<br>";
//  }


//  for($a=1;$a<=5;$a++){
//     for($b=1;$b<=$a;$b++){
//         echo "*";
//     }
//     echo"<br>";
//  }
//  for($a=1;$a<=5;$a++){
//     for($b=1;$b<=5-$a;$b++){
//         echo "*";
//     }
//     echo"<br>";
//  }
// array
// $a=array(' pradeep ',' sujeet ',' ranjeet ');
// $ab=count($a);
// for($c=0;$c<$ab;$c++){
// echo $a[ $c ];
// }
// echo "<pre>";
// print_r($a);
// echo "</pre>";

// multidemantional array
$ba=[
      ['sandeep ',' ranjeet ',' kuldeep '],
      ['sandeep ',' ranjeet ',' kuldeep '],
      ['sandeep ',' ranjeet ',' kuldeep '],
      ['sandeep ',' ranjeet ',' kuldeep '],
      ['sandeep ',' ranjeet ',' kuldeep ']

];

// for ($row=0;$row<5;$row++) {
//     for ($col=0;$col<3;$col++) {
//         echo $ba[$row][$col] ;
//     }
//     echo "<br>";
// }

foreach ($ba as $value) {
    foreach ($value as $value1) {
        echo $value1 ;
    }
    echo "<br>";
}


 
 

