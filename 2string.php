<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // 1)
    $str = "laptop";
    $array = str_split($str, 3);
    echo "<pre>";
    print_r($array);
    echo "</pre>";

    $array = str_split($str);
    echo "<pre>";
    print_r($array);
    echo "</pre>";

    $chunkspilit = chunk_split($str, 2, ".....");
    echo "<pre>";
    print_r($chunkspilit);
    echo "</pre>";

    // 2)
    $stringval = "this is first building";
    $up = strtoupper($stringval);  //upper
    echo $up . "<br>";
    $low = strtolower($stringval); //lower
    echo $low . "<br>";
    $uc = ucfirst($stringval); //upper first
    echo $uc . "<br>";
    $ucword = ucwords($stringval); //upper words first
    echo $ucword . "<br>";
    $lc = lcfirst($stringval); //lower first 
    echo $lc . "<br>";

    // 3)
    $device = "laptop samsung samsung galaxy s5";
    echo strlen($device); //length
    echo "<br>";
    echo str_word_count($device); //word count
    echo "<br>";
    echo substr($device, 0, 7); //first 5 chars
    echo "<br>";
    echo substr_count($device, "samsung") . "<br>"; //count

    // 4)
    $s = "laptop samsung samsung galaxy s5";
    echo strpos($s, "samsung") . "<br>"; //index


    // 5)search
    $search = "laptop samsung samsung galaxy s5";
    echo strstr($search, "samsung", true);
    echo strchr($search, "samsung", true);
    echo strrchr($search, "samsung") . "<br>";

    //  6)replace
    $rep = "laptop samsung samsung galaxy s5";
    echo str_replace("samsung", "iphone", $rep) . "<br>"; //case sensitive
    echo str_ireplace("Samsung", "iphone", $rep) . "<br>"; //case insensitive
    echo substr_replace($rep, "iphone", 0, 4) . "<br>";

    //7 compare 
    $str = "laptop";
    $ch = "laptop";
    echo strcmp($str, $ch);

    // 8)

    $input = 'this is my first <b>your</b>';
    echo htmlentities($input);

    $inpu = ' <img src="../images/a.avif" alt="">';
    // echo htmlentities($inpu, ENT_QUOTES); //ENT_QUOTES means "double quotes"  
    // echo htmlentities($inpu, ENT_NOQUOTES); //ENT_QUOTES means "single quotes" or double quotes
    // echo htmlspecialchars($inpu, ENT_QUOTES);
    // echo htmlspecialchars($inpu, ENT_NOQUOTES);
    // echo htmlspecialchars($inpu, ENT_HTML5);
    // echo htmlspecialchars($inpu, ENT_SUBSTITUTE);


    // 8)
    echo "<br>";
    echo md5("html4version");
    echo "<br>";
    echo md5("html4version", true) . "<br>";
    echo sha1("html4version") . "<br>";
    echo sha1("html4version", true) . "<br>";

    // 9)
    $psd = bin2hex("htmlversion") . "<br>";
    echo $psd;
    echo hex2bin($psd);


    ?>
</body>

</html>