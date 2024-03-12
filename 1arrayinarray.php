<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php

    $employe = [
        "emp1" => [
            "id" => 1,
            "salry" => 1000,
            "month" => "jan"
        ],
        "emp2" => [
            "id" => 2,
            "salry" => 2000,
            "month" => "feb"
        ],
        "emp3" => [
            "id" => 3,
            "salry" => 3000,
            "month" => "march"
        ],
        "emp4" => [
            "id" => 4,
            "salry" => 4000,
            "month" => "april"
        ]
    ];

    // var_dump($employe);


    $product = array("red", "blue", "green", "white", "black");

    if (in_array("red", $product)) {
        echo "Yes";
    } else {
        echo "no";
    }

    $check = in_array("blue", $product);
    echo $check;

    $search = array_search("blue", $product);

    if ($search) {
        echo "yes i found  it";
    } else {
        echo "No i did not found";
    }

    ?>
</body>

</html>