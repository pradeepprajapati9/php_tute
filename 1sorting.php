<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $name = ["pradeep", "kunal", "karan", "sandeep", "charger"];
    $num =  [4, 0, 1, 4, 5];

    sort($name);
    echo "<pre>";
    print_r($name);
    echo "</pre>";

    sort($num);
    echo "<pre>";
    print_r($num);
    echo "</pre>";



    $color = [
        "d" => "red",
        "s" => "green",
        "first" => "blue",
        "fourth" => "yellow",
    ];

    asort($color);
    echo "<pre>";
    print_r($color);
    echo "</pre>";

    ksort($color);
    echo "<pre>";
    print_r($color);
    echo "</pre>";

    // 1)sort use in ascending order for index array
    // 2)rsort use in descending order for index array for reverse
    // 3)asort use in descending order for index array
    // 4)arsort  use in ascending order for associative array
    // 5)ksort use in ascending order for associative array for key sorting
    // 6)krsort use in descending order for associative array for key sorting
    // 7)array_multisort use in ascending order for associative array
    // 8) array_reverse use in descending order for associative array
    // 9)natocasesort use in ascending order for associative array
    // 10)natsort use in descending order for associative array
    ?>

</body>

</html>