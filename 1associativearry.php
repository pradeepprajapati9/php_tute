<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
    // associative array in php
    // 1)
    $asso = array(
        "a" => "apple",
        "b" => "banana",
        "c" => "cherry",
    );

    echo "<pre>";
    echo $asso["a"];
    echo $asso["b"];
    echo $asso["c"];
    echo "</pre>";

    // 2)
    $product = array();
    $product["name"] = "iphone";
    $product["price"] = 1000;
    $product["quantity"] = 10;
    $product["color"] = "black";

    foreach ($product as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }

    echo "<br>";

    // 3)
    $color = [
        "first" => "red",
        "second" => "green",
        "third" => "blue",
        "fourth" => "yellow",
    ];

    foreach ($color as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }


    // 4)
    $age = [
        "first" => 20,
        "second" => 30,
        "third" => 40,
    ];

    $age["fourth"] = 50;
    $age["fifth"] = 60;

    foreach ($age as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }

    ?>
</body>

</html>