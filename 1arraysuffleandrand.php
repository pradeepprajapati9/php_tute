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
    // $veg = ["Onion", "Potato", "Tomato"];
    // $electronic = ["Laptop", "Mobile", "TV", "Computer"];

    // random
    $newarry = array_rand($fruts);
    echo $newarry;
    echo $fruts[$newarry];



    // shuffle random
    shuffle($fruts);
    echo "<pre>";
    print_r($fruts);
    echo "</pre>";


    ?>
</body>

</html>