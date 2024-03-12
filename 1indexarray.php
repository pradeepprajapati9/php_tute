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
    $product = array("red", "blue", "green", "white", "black");
    echo "<pre>";
    print_r($product);
    echo "</pre>";

    // echo $product[0];
    // echo $product[1];
    for ($p = 0; $p < count($product); $p++) {
        echo $product[$p];
    }

    // 2)
    $css = array();
    $css[0] = "red";
    $css[1] = "blue";
    $css[2] = "green";
    $css[3] = "white";
    $css[4] = "black";
    echo "<pre>";
    print_r($css);
    echo "</pre>";
    for ($c = 0; $c < count($css); $c++) {
        echo $css[$c];
    }

    echo "<br>";

    // 3)
    $cup = [12, 34, 56, 78, 909, 45];
    // echo $cup[0];
    // echo $cup[1];
    // echo $cup[2];
    // echo $cup[3];
    // echo $cup[4];

    for ($cu = 0; $cu < count($cup); $cu++) {
        echo $cup[$cu];
    }

    ?>
</body>

</html>