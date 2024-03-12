<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
    $food = array("pizz", "chicken", "burger", "chicken");

    echo "The size of the array is " . count($food);
    echo "<br>";
    echo "The size of the array is " . sizeof($food);


    $emp = [
        [2323, 45, 56, 6, 76, 7, 8, 8],
        [444, 56, 7, 8, 995, 434, 68,],
        [34, 67, 8, 9, 99, 55, 77, 88],
        [34, 45, 66, 67, 788, 89, 44],
        [34, 55, 67, 78, 89, 99, 00],
    ];

    echo "The size of the array is " . sizeof($emp);


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

    echo "The size of the array is " . sizeof($employe);
    
    ?>
</body>

</html>