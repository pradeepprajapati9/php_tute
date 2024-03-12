<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $cup = array(12, 34, 56, 78, 909);

    function test($n)
    {
        echo $n * 2;
    }
    $newarr = array_map("test", $cup);


    $product = array("red", "blue", "green", "white", "black");


    function tests($s)
    {
        echo $s;
    }
    $newarr = array_map("tests", $product);
    ?>
</body>

</html>