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
    $newarry = array_values($a1);
    echo "<pre>";
    print_r($newarry);
    echo "</pre>";

    $a2 = array("a" => "red", "b" => "red", "c" => "blue", "d" => "green", "e" => "blue", "f" => "yellow");

    $newarry1 = array_unique($a2); //unique don't duplicate
    echo "<pre>";
    print_r($newarry1);
    echo "</pre>"
    ?>

</body>

</html>