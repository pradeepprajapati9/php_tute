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
    // $divice = ["mobile", "laptop", "pc"];


    array_splice($fruts, 1, 2, "mobile");

    echo "<pre>";
    print_r($fruts);
    echo "</pre>";

    ?>
</body>

</html>