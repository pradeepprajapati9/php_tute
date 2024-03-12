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

    $shift = array_shift($fruts);
    echo $shift;
    echo "<br>";

    for ($let = 0; $let < count($fruts); $let++) {
        echo $fruts[$let];
    }
    echo "<br>";


    $unshift = array_unshift($fruts, "Lemon");
    echo $unshift;
    echo "<br>";

    for ($let = 0; $let < count($fruts); $let++) {
        echo $fruts[$let];
    }
    echo "<br>";

    ?>

</body>

</html>