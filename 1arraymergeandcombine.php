<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <?php
    $product = array("red", "blue", "green", "white", "black");
    $product1 = array("peeda", "dukh", "zimmedari", "pariar", "ghar");

    // merger
    $newmerge = array_merge($product, $product1);
    echo "<pre>";
    print_r($newmerge);
    echo "</pre>";

    // array recursive 
    $color = [
        "first" => "red",
        "second" => "green",
        "third" => "blue",
        "fourth" => "yellow",
    ];

    $age = [
        "first" => 20,
        "second" => 30,
        "third" => 40,
    ];


    $newmergerecursive = array_merge_recursive($color, $age);
    echo "<pre>";
    print_r($newmergerecursive);
    echo "</pre>";


    // combine
    $product = array("red", "blue", "green", "white", "black");
    $cup = array(12, 34, 56, 78, 909);
    $newcombine = array_combine($product, $cup);
    echo "<pre>";
    print_r($newcombine);
    echo "</pre>";


    ?>
</body>

</html>