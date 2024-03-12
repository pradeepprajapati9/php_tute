<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $fruts = ["Apple", "Banana", "Orange", "Mango"];
    $veg = ["Onion", "Potato", "Tomato"];
    $electronic = ["Laptop", "Mobile", "TV", "Computer"];

    $rep = array_replace($fruts, $veg, $electronic);

    echo "<pre>";
    print_r($rep);
    echo "</pre>";


    $asso = array(
        "a" => "apple",
        "b" => "banana",
        "c" => "cherry"
    );

    $color = array(
        "first" => "red",
        "second" => "green",
        "third" => "blue"
    );

    $repcursive = array_replace_recursive($asso, $color);

    echo "<pre>";
    print_r($repcursive);
    echo "</pre>";
    ?>
</body>

</html>