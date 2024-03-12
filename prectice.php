<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $string="PRADEEP KUMAR";
    echo bin2hex($string); //ASCII code me convert kr deta hai secure perpose
    echo "<br>";
    echo "<br>";
    $str=bin2hex(' THIS IS MOUSE');
    echo $str;
    echo hex2bin($str);//ASCII code ko readable form me convert kr dega

    echo "<br>";
    echo "<br>";
    $key=chr(65); //ASCI VALUE  SE STRING RETURN
    $key=chr(97);
    echo $key;

    $key=ord('a'); //STRING VALUE TO ASCII RETURN
    $key=ord('A');
    echo $key;

    echo "<br>";
    echo "<br>";
    $lap="<h1>This is </h1><i>Laptop</i>";
  // echo strip_tags($lap);//AGAR SARA TAG HATANA HO AISHE
    echo strip_tags($lap, "<h1>");//AGAR JIS TAG NHI HATANA HAI TO LIKH DENGE

    echo "<br>";
    echo "<br>";
    $lap="THIS IS MOUSE AND KEYBOARD";
    echo wordwrap($lap, 4, "<br>", true);

    // math function

    echo "<br>";
    echo "<br>";
    $max=max(10, 20, 30, 40, 50, 60);
    echo 'max value=>'.$max;
    echo "<br>";
    echo "<br>";
    $min=min(10, 20, 30, 40, 50, 60);
    echo 'min value=>'. $min;
    $val=min(array(10,74,35,55), array(10,40,80,20,545,12,45));
    echo "<pre>";
    print_r($val);
    echo "</pre>";

    echo "<br>";
    echo "<br>";

    echo ceil(1.1) ;// ye ans=2
    echo "<br>";
    echo floor(1.1); // ye ans=1
    echo "<br>";
    echo round(1.5); // ans=2 ye 0.5 se upper wali value return and 0.4se niche wali value return krega
    echo "<br>";
    echo abs(-25) ;// ye ans=25 jo hoga wahi rahega but age ka sign hta dega
    echo "<br>";

    echo "<br>";
    echo intdiv(16, 8); // ye devide kr dega ans=2
    echo "<br>";
    echo sqrt(16) ;// ye sqaure root nikal kr dega

    echo "<br>";
    echo "<br>";
    echo pow(16, 2); //isne two time multiply kr diya 16*16=256

    //ye sari random value show karenge
    echo "<br>";
    echo "<br>";
    echo rand();
    echo "<br>";
    echo rand(0, 100);
    echo "<br>";
    echo mt_rand(0, 100);
    echo "<br>";
    echo lcg_value();


    ?>

</body>
</html>