<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $max = max(123, 34, 566, 788, 89) . "<br>";
    echo $max;
    $min = min(123, 34, 566, 788, 89) . "<br>";
    echo $min;
    echo (ceil(123.5)) . "<br>";
    echo (ceil(-123.5)) . "<br>";
    echo (ceil(0.12)) . "<br>";
    echo (floor(123.5)) . "<br>";
    echo (floor(23.5)) . "<br>";
    echo (round(123.5)) . "<br>";
    echo (abs(0.60)) . "<br>";
    echo (abs(7)) . "<br>";
    echo (abs(2.1)) . "<br>";
    echo (abs(-3.4)) . "<br>";
    echo sqrt(4) . "<br>";
    echo pow(2, 3) . "<br>";
    echo rand(1,100) . "<br>";
    echo rand(0,10) . "<br>";
    echo mt_rand(0,10) . "<br>";
    ?>
</body>

</html>