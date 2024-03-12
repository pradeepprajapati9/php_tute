<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $let = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");

    $newkey = array_fill_keys($let, "mobile");

    echo "<pre>";
    print_r($newkey);
    echo "</pre>";

    $new = array_fill(3, 5, "mobile"); //where you want to fill

    echo "<pre>";
    print_r($new);
    echo "</pre>";
    ?>
</body>

</html>