<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php

    $a1 = array("a" => "red", "b" => "green", "c" => "blue");
    $b1 = array("a" => "red", "d" => "green", "c" => "24");

    $interset = array_intersect($a1, $b1);  //comman values give
    echo "<pre>";
    print_r($interset);
    echo "</pre>";

    $interkey = array_intersect_key($a1, $b1);  //comman key give
    echo "<pre>";
    print_r($interkey);
    echo "</pre>";

    $interall = array_intersect_assoc($a1, $b1);  //comman key and value give
    echo "<pre>";
    print_r($interall);
    echo "</pre>";



    ?>
</body>

</html>