<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
    $str = array("hello", "world ", "this", "is most popular languse of php");

    // $array = explode(" ", $str, 5);
    // echo "<pre>";
    // print_r($array);
    // echo "</pre>";

    $array1 = implode("/", $str);
    echo "<pre>";
    print_r($array1);
    echo "</pre>";
    ?>
</body>

</html>