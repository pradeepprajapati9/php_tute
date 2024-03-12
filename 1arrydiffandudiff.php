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
    $b1 = array("a" => "red", "b" => "green", "c" => "24");

    $diff = array_diff($a1, $b1);  //give diffrence values
    echo "<pre>";
    print_r($diff);
    echo "</pre>";

    $udiff = array_udiff($a1, $b1, "compare");  //give diffrence values
    echo "<pre>";
    print_r($udiff);
    echo "</pre>";

    

    ?>
</body>

</html>