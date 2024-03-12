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

    $key = array_keys($fruts);
    $keyfirs = array_key_first($fruts);
    $keylast = array_key_last($fruts);
    $value = array_values($fruts);
    
    echo "<pre>";
    print_r($key);
    echo "</pre>";

    echo "<pre>";
    print_r($keyfirs);
    echo "</pre>";


    echo "<pre>";
    print_r($keylast);
    echo "</pre>";

    echo "<pre>";
    print_r($value);
    echo "</pre>";


    ?>
</body>

</html>