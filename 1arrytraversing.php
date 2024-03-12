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

    echo "current" . current($fruts) . "<br>";
    echo "key" . key($fruts) . "<br>";
    echo "position" . pos($fruts) . "<br>";

    // next and previous
    next($fruts);
    echo "current" . current($fruts) . "<br>";
    next($fruts);
    echo "next" . current($fruts) . "<br>";

    // prev
    prev($fruts);
    echo "prev" . current($fruts) . "<br>";

    // end
    end($fruts);
    echo "end" . current($fruts) . "<br>";




    ?>
</body>

</html>