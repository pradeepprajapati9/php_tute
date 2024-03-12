<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $fruts = array(2, 4, 6, 8);

    $sum = array_sum($fruts);
    echo $sum;

    echo "<br>";
    $pro = array_product($fruts);
    echo $pro;

    ?>
</body>

</html>