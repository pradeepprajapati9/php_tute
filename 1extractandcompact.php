<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $color = array('a' => 'red', 'b' => 'blue', 'c' => 'green');
    extract($color);
    echo "values of a $a <br>";
    echo "values of a $b <br>";
    echo "values of a $c <br>";


    extract($color, EXTR_OVERWRITE); //by default
    echo "values of a $a <br>";
    echo "values of a $b <br>";
    echo "values of a $c <br>";


    //RANGE  IN PHP 
    $arry = range(1, 10);

    echo "<pre>";
    print_r($arry);
    echo "</pre>";
    ?>


</body>

</html>