 

<!-- how to work string step by step -->

<?php   

echo strlen('Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis ipsum non eos, corporis ipsam expedita dignissimos quidem, doloribus architecto nulla fugiat aliquam? Sequi, porro! Odio quasi dolor repellendus ratione facere officia vero sapiente id, delectus eius, est unde possimus esse magnam aliquid? Soluta minus perspiciatis distinctio magni consectetur deserunt veniam? Obcaecati voluptatem, iusto corrupti deserunt qui architecto vel suscipit iure animi cum quas reiciendis expedita, eligendi sapiente eum atque veniam ipsum aut eveniet sint accusamus. Excepturi atque sequi repellendus ratione deleniti voluptates repudiandae animi maxime distinctio aliquam voluptas nam ut assumenda nesciunt mollitia ex eius eveniet, totam unde beatae expedita accusamus. Fugit omnis soluta labore? Pariatur fugiat delectus culpa inventore quam consectetur aspernatur odio voluptatem ad, maxime temporibus. Cum, repellendus?'); //use for length 
echo"lentgth counter length<br>";

echo "<br   >";

echo str_word_count('ta dignissimos quidem, doloribus architecto nulla fugiat aliquam? Sequi, porro! Odio quasi dolor repellendus ratione facere officia vero sapiente id, delectus eius, est unde possimus esse magnam aliquid? Soluta minus perspiciatis distinctio magni consectetur deserunt veniam? Obcaecati voluptatem, iusto corrupti deserunt qui architecto vel suscipit iure animi cum quas reiciendis expedita, eligendi sapiente eum atque veniam ipsum aut eveniet sint accusamus. Excepturi atque sequi repellendus ratione deleniti voluptates repudiandae animi maxime distinctio aliquam voluptas nam ut assumenda nesciunt mollitia ex eius eveniet, totam unde beatae expedita '); // use for word count
echo"word counter<br>";

echo "<br>";
echo strrev(' Obcaecati voluptatem, iusto corrupti deserunt qui architecto vel suscipit iure animi cum quas reiciendis expedita, eligendi sapiente eum atque veniam ipsum aut eveniet sint accusamus. Excepturi atque sequi repellendus ratione deleniti voluptates repudiandae animi maxime distinctio aliquam voluptas nam ut assumenda nesciunt mollitia ex eius eveniet, totam unde beatae e'); // reverse a string
echo "<b><span>reverse a stirng</span></b>";
echo "<br>";
echo str_replace('pradeep','job','hello job');// search in string
 
echo "<br>";
echo(sqrt(144)); 


// how to use str_split
// its make charactor array 

$strings='This Is my ';

$array=str_split($strings);

echo "<pre>";
print_r($array);
echo "/<pre>";

//  chunk_split its use to per charactor after dot lgana
$strings='pradeep sunny';
// first variable second lenght third style . ,
$nestring=chunk_split($strings, 1, ".");
echo $nestring;

// php lowecase and uppercase

$my = "my name is pradeep kumar";
// $newstr=strtoupper($my); ; 
// $newstr=ucfirst($my); //first uppercase
$newstr=ucwords($my);  // capitalize
 echo $newstr;

 $my1=" THIS IS MOUSE AND PRICE IS ONE HUNDRED";
 $newmy=strtolower($my1);
 echo $newmy;

echo "<br>";
 $my1=" THIS IS MOUSE AND PRICE IS ONE HUNDRED";
 $newmy=strlen($my1);
 echo $newmy;

echo "<br>";
 $my1=" THIS IS MOUSE AND PRICE IS ONE HUNDRED";
 $newmy=str_word_count($my1);
 echo $newmy;

echo "<br>";
 $my1=" THIS IS MOUSE AND PRICE IS ONE HUNDRED";
 $newmy=substr_count($my1,'is');
 echo $newmy;

//  search string functio word or charactor 
//   strpos()
//   strrpos()
//   stripos()
//   strripos()
//   strstr()
//   strchr()
//   strrchr()
 $str="THIS is my Name and i will HELP you";
//  first variable second searchword third search kha se krna h in number charator
echo  strpos($str,'is')."<br>";
echo  strrpos($str,'and')."<br>";

echo stripos($str,'this')."<br>";
echo strripos($str,'help')."<br>";
 
//  replace function in php string
$search="this is functon of  search bar";
echo str_replace('this','that',$search);
// if you want word wise replace use it
$search="this is functon this is search bar";
echo  "<br>";
$wor=['this','is'];
$rep=['that','not'];
echo str_replace($wor,$rep,$search);
echo "<br>";
// if you want all replace 
$search="this is functon this is search bar";
// echo str_replace('this','that',$search);
echo str_ireplace('THIS','that',$search);


// STRING COMPARE STRING FUCTION
echo  strcmp('hello','hello'); // 0 se match 
echo  strncmp('hello',' Hello',1);// lenght compare
echo  strcasecmp('PRADEEP',' Hello');// CASE SE compare

echo "<br>";
// if you want to reverse word 
echo strrev('TRIWANTAPURAM ');
echo "<br>";
// change text refresh 
echo str_shuffle(' TRIWANTAPURAM');
echo "<br>";    
// if you want to make lenght of string
$pad="THIS-";
// echo str_pad($pad,20,'.');
// echo str_pad($pad,20,'.',STR_PAD_LEFT);
// echo str_pad($pad,20,'.',STR_PAD_RIGHT);
// echo str_pad($pad,20,'.',STR_PAD_BOTH);
echo str_repeat($pad,3);

// trim function
 $trim="this how can you solve this";
//  echo trim($trim,'how');
//  echo rtrim($trim,'this');
//  echo ltrim($trim,'this');
//  echo chop($trim,'this'); //only right side se trim krta hai

echo "<br>";
// addslashes function secure for hackers
$trim="'this how can you solve this'";
// $newtrim= addslashes($trim); // slesh lgane ke liye where you giv ' '
echo addcslashes($trim,'c'); // if you want to give particular word slesh
// echo stripslashes($newtrim);  // slesh remove krne ke liye

echo "<br>";
echo "<br>";
// how to use htmlentities functions 
$trim="'<h1>this how <b>can</b> you solve this<h1>'";
// echo htmlentities($trim);  //only decode double quats and special charactor conver krta hai
// echo htmlentities($trim,ENT_QUOTES);  //ALL decode you can see view source page  ctrl+u
// echo htmlentities($trim,ENT_NOQUOTES);  // only decode special charatcor  ctrl+u
echo "<br>";
echo "<br>";
$trim="<h1>this how <b>can</b> you solve this</h1>";
// echo htmlspecialchars($trim); //only decode special charactor
$html= htmlspecialchars($trim); //only decode special charactor

// echo html_entity_decode($trim); // use for remove decode 
echo htmlspecialchars_decode($trim); // use for remove decode 


echo '<br>';
// if you want to secure your massegae then use it
$uuincode="Don't Share Opt Anyone";
$ud= convert_uuencode($uuincode); // convert uuencode
echo $ud ."<br>";
echo convert_uudecode($ud); // remove convert uuencode

?>