<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $marks = array(
        "emp1" => array("id" => 1, "salry" => 1000, "month" => "jan"),
        "emp2" => array("id" => 2, "salry" => 2000, "month" => "feb"),
        "emp3" => array("id" => 3, "salry" => 3000, "month" => "mar"),
        "emp4" => array("id" => 4, "salry" => 4000, "month" => "apr"),
    );


    echo "<pre>";
    print_r($marks);
    echo "</pre>";
    // echo $marks["emp1"]["id"];
    // echo $marks["emp1"]["salry"];
    // echo $marks["emp1"]["month"];
    // echo "<br>";
    // echo $marks["emp2"]["id"];
    // echo $marks["emp2"]["salry"];
    // echo $marks["emp2"]["month"];

    foreach ($marks as $key => $value) {
        foreach ($value as $key1 => $value1) {
            echo $key1 . " : " . $value1 . "<br>";
        }
        echo "<br>";
    }



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

    echo "<pre>";
    print_r($employe);
    echo "</pre>";

    
    foreach ($employe as $key => $value) {
        foreach ($value as $key1 => $value1) {
            echo $key1 . " : " . $value1 . "<br>";
        }
        echo "<br>";
    }

    ?>
</body>

</html>