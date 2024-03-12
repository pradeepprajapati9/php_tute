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

    // pop
    $pop = array_pop($fruts);
    echo $pop;
    echo "<br>";

    for ($let = 0; $let < count($fruts); $let++) {
        echo $fruts[$let];
    }
    echo "<br>";

    // push
    $push = array_push($fruts, "Lemon");
    echo $push;
    echo "<br>";
    for ($let = 0; $let < count($fruts); $let++) {
        echo $fruts[$let];
    }

    ?>
</body>

</html>