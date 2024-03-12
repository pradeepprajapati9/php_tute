<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $sallery = array(
        array(
            "id" => 1,
            "F" => "anil",
            "L" => "kapoor",
        ),
        array(
            "id" => 2,
            "F" => "ajay",
            "L" => "kapoor",
        ),
        array(
            "id" => 3,
            "F" => "manoj",
            "L" => "kapoor",
        ),
        array(
            "id" => 4,
            "F" => "vijay",
            "L" => "kapoor",
        )
    );

    $newarry = array_column($sallery, "F","id");  // column the array
    echo "<pre>";
    print_r($newarry);
    echo "</pre>";


    $newarrychunk = array_chunk($sallery,2);  // chunk the array into 2 arrays
    echo "<pre>";
    print_r($newarrychunk);
    echo "</pre>";
    ?>

</body>

</html>