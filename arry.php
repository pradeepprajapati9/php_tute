<?php
// array
// array is a store multiple value store they called array

// how to create a normal array in php

$color=array('red ',' blue',' black',' greeen');
print_r($color);
// echo $color[0];
// echo $color[1];

echo "<br>";
// $count=count($color);

for ($i=0;$i<4;$i++) {
    echo $color [$i];
}

echo "<br>";
// associative array
$device=array('item'=>' mouse','price'=>' 150','color'=>' green');
// $device=['item'=>' mouse','price'=>' 150','color'=>' green'];
echo $device['item'];
echo $device['price'];
echo $device['color'];

echo "<br>";
foreach ($device as $key=>$val) {
    echo $key."=>".$val;
}

echo "<br>";
// multydemnsiotal array
$machine=[
    ['first ',' mouse',' price',' 400'],
    ['first ',' mouse',' price',' 400'],
    ['first ',' mouse',' price',' 400'],
    ['first ',' mouse',' price',' 400'],
    ['first ',' mouse',' price',' 400']
];

echo $machine[0][0];
echo $machine[0][1];
echo $machine[0][2];
echo $machine[0][3];
echo '<br>';

foreach ($machine as $v) {
    echo '<br>';
    foreach ($v as $v1) {
        echo $v1;
    }
}
echo "<br>";
echo "<br>";
for ($row=0; $row<5;$row++) {
    for ($col=0; $col<4;$col++) {
        echo $machine[$row][$col];
    }
    echo "<br>";
}

// multydemnsiotal accociative array
$videos=[
     ' funny'=>[' first'=>' rampal',' secondname'=>' bhrmbhanand',' thirdname'=>' rajpalyadav'],
     ' romance'=>[' first'=>' akashy',' secondname'=>' bhura','  thirdname'=>' govinda'],
     ' suspense'=>[' first'=>' tiger',' secondname'=>' neelam',' thirdname'=>' kabita'],
     ' electricity'=>[' first'=>' keyboard',' secondname'=>' mouse',' thirdname'=>' mobile']
];
echo "<pre>";
print_r($videos);
echo "</pre>";
?>

<?php
foreach ($videos as $key=>$val) {
echo '<table border>';
    echo "<tr>";
    echo "<td>".$key."</td>";
    foreach ($val as $val1) {
        echo "<td>".$val1."</td>";
    }
    echo "</tr>";
}
echo '</table>';


// if you wnat to use forecha list
foreach($machine as list($id,$name,$price,$rate)){
   echo $id,$name,$price,$rate;
   echo "<br>";
}

// in_array for find
echo "<br>";
$abc=array('this','mouse');
if(in_array('this',$abc)){
    echo "find succusfully";
}else{
    echo "can 't find array";
}

echo "<br>";
// array_replace() 

$div= array('mouse','chain','bindi');
$divine= array('machine','logo','design');
$new=array_replace($divine,$div);
echo "<pre>";
print_r($new);
echo "</pre>";

// array_pop  last ko delte  array me
//  array_push  last me add array ko

// array_shift  strating array ke vlaue ko delete krta hai
// array_unshift starting me array ke vlaue me add krta hai
// array_merge() its add all array in one array
// array_slice(array, start, length) how many you select in array depends in your choice
// array_splice(array, start, length, arraytwo) how many you delete in array depends in your choice
// array_keys() only return index key
// array_key_first() only return index key first value
// array_key_last() only return index key last value
// array_key_exists() ye find krta hai ki is array me is nam ka koi key exists krta hai ya  nhi or
// key_exists same as above

$v=[
    'this'=>'dot','not'=>'this','dot'=>'not'
];
$e=[
    'this','dot','not'
];
$z=[
    'this','dot','not'
];
$k=[
    'this','dot','not'
];
// array_pop($v);
// array_push($v,'mobile');

// array_shift($v);
// array_unshift($v,'are','as','tea');
// $add=array_merge($v,$e,$z,$k);
// $add=array_combine( $z,$k);
// $add=array_slice($v,1,2);   
//    array_splice($v,1,2);

// $add =array_key_exists('this',$v);
// $add =key_exists('this',$v);
// if($add){
//     echo " $add.key is exists ";
// }else{
//     echo "$add .key is not exits";
// }
// echo "<pre>";
// print_r($v);
// echo "</pre>";

// array_intersect() return match value in associative array
// array_intersect_key() return match key in associative array
// array_intersect_assoc() return match key and value in associative array
//   array_uintersect()
//   array_uintersect_assoc()
//   array_uintersect_uassoc()

$col=array('a'=>'red','b'=>'green','c'=>'blue','d'=>'black');
$col1=array('a'=>'cyan','g'=>'white','f'=>'blue','e'=>'brown');

// $find=array_intersect($col,$col1);
// $find=array_intersect_key($col,$col1);
// $find=array_intersect_assoc($col,$col1);
$find=array_intersect_assoc($col,$col1);
echo "<pre>";
print_r($find);
echo "</pre>";


$co=array('a'=>'red','b'=>'green','c'=>'blue','d'=>'black');
$co1=array('a'=>'red','g'=>'white','f'=>'blue','e'=>'brown');
// $f=array_diff($co,$co1);//which value not match print
// $f=array_diff_key($co,$co1); // which key not match print
$f=array_diff_assoc($co,$co1); // which key and value not match print
echo "<pre>";
print_r($f);
echo "</pre>";


$mouse=array('a'=>'green','b'=>'green','c'=>'green','d'=>'black');
// array_values() 
// array_unique()

// $ne=array_values($mouse);
$ne=array_unique($mouse);
echo "<pre>";
print_r($ne);
echo "</pre>";



$newset=array(
    array('firstname'=>"gopal","lastname"=>"kumar"),
    array('firstname'=>"rani","lastname"=>"kumari"),
    array('firstname'=>"ram","lastname"=>"kumar"),
    array('firstname'=>"sonam","lastname"=>"kumari")
);
// $newest=array_column($newset,'firstname'); //return value of column
// echo "<pre>";
// print_r($newest);
// echo "</pre>";

$pair=['firstname',"gopal","lastname","kumar",'firstname',"sonam","lastname","kumari",'firstname',"ram","lastname","kumar"];
    
 
$pair1=array_chunk($pair,2); //return value of pair depends you
echo "<pre>";
print_r($pair1);
echo "</pre>";  



// $flip=array('firstname'=>"sonam","lastname"=>"kumari"); 
// $flip1=array_flip($flip);  // return opposite value flip value like
// echo "<pre>";
// print_r($flip1);
// echo "</pre>";  


$flip=array('firstname'=>"sonam","lastname"=>"kumari"); 
$flip1=array_change_key_case($flip,CASE_UPPER);  // return  UPPERCASE
$flip1=array_change_key_case($flip,CASE_LOWER);  // return  LOWERCASE
echo "<pre>";
print_r($flip1);
echo "</pre>";  

$sum=array(2,3,6,5,8,63);
// $sum1=array_sum($sum); // this funciton doing sum
$pro=array_product($sum);  // this funcitn doing multiply 2*3*6*5*8*63=90720
echo "<pre>";
print_r($pro);
echo "</pre>";  

$mouse=array('a'=>'green','b'=>'green','c'=>'green','d'=>'black');
// $rand=array_rand($mouse);// genrate a random vlaue and key
 shuffle($mouse);// genrate a random vlaue and key
echo "<pre>";
print_r($mouse);
echo "</pre>";

// how to fill  vlaue in index array from function 
$a=array('a','b','c','d');
$fillvalue=array_fill_keys($a,"mouse");
echo "<pre>";
print_r($fillvalue);
echo "</pre>";

// how to fill vlaue without make array 
// parameter(index,  kha tk value deni, kya value deni h)
$c=array_fill(0,5,'test');
echo "<pre>";
print_r($c);
echo "</pre>";

// how to use array_walk()
 $fruit=array(
    'a'=>'color','b'=>'red','c'=>'blue','d'=>'green'
 );

 array_walk($fruit ,'myFunc','is a key of');
 
 function myFunc($value,$key,$param){
    echo "$key,$param,$value <br>";
 }


//  how to create multidemntonal array from array
function thisFunc($n,$m){
 return ["$n=$m"];
}
$co=array(0,1,2,3,4,5);
$coval=array('pradeep','sandeep','radhay','mouse','mobile','keyboard');
$map=array_map('thisFunc',$co,$coval);
echo "<pre>";
print_r($map);
echo "</pre>";


// array sorting
// $name=array('deli','naraina','canada','amritsar','mumbai','kerla','channai','india','rajasthan');
$name=array('2'=>'naraina','5'=>'amritsar','8'=>'kerla','4'=>'india','3'=>'rajasthan');

// sort($name); //acending oreder atoz
// rsort($name);  // decending order ztoa
// arsort($name);  //accociative  decending order ztoa only for value
// asort($name);  //accociative  acending order atoz  only for value
// ksort($name);  //accociative  acending order atoz  only for key
// krsort($name);  //accociative  acending order ztoa  only for key
//   array_multisort() // accociative multiple array acending order atoz  but same value in array  

$natsort=array('Img.png2' ,'Img.png10','Img.png5' ,'Img.png4','Img.png6','Img.png21');
natsort($name);  //accociative  acending order  
echo "<pre>";
print_r($natsort);
echo "</pre>";

// array traversing function
$traversing=array('Img.png2' ,'Img.png10','Img.png5' ,'Img.png4','Img.png6','Img.png21');
echo "current =>" .current($traversing)."<br>";
echo "key     =>" .key($traversing)."<br>";
echo "pos     =>" .pos($traversing)."<br>";
echo "next    =>" .next($traversing)."<br>";
echo "current    =>" .current($traversing)."<br>";
echo "prev    =>" .prev($traversing)."<br>";
echo "end    =>" .end($traversing)."<br>";
 
echo "<br>";
$name=array('a'=>'naraina','b'=>'amritsar','c'=>'kerla','d'=>'india','e'=>'rajasthan');
// extract use
extract($name);
echo "place name a: $a<br>";
echo "place name b: $b<br>";
echo "place name c: $c<br>";
echo "place name d: $d<br>";
echo "place name e: $e<br>";


// using compact() make array
$fn='pradeep';
$ln='sandeep';
$tn='ramkumar';
$ffn='nihal';
$sn='arjun';

$arr=compact("fn","ln","tn","ffn","sn");

echo "<pre>";
print_r($arr);
echo "</pre>";


// using range functio 
// parameter first=start num second=kha tk   third=increament and dcreament
$range=range(1,50 ,5);
echo "<pre>";
print_r($range);
echo "</pre>";


// print abcd in range
$ran=range('Z','A');
echo "<pre>";
print_r($ran);
echo "</pre>";


// if you want array convert to string use explode
// if you want string convert to arry use explode

// $word="this is my mouse and his laptop";
// $arry=explode(" ",$word);

// array convert to string 
$word=array ('this', 'is', 'my', 'mouse', 'and') ;
$arry=implode(" ,",$word);

echo "<pre>";
print_r($arry);
echo "</pre>";

?>
 
