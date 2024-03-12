<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    //php multidimensional array 

    //  1)
    $emp = [
        [2323, 45, 56, 6, 76, 7, 8, 8],
        [444, 56, 7, 8, 995, 434, 68,],
        [34, 67, 8, 9, 99, 55, 77, 88],
        [34, 45, 66, 67, 788, 89, 44],
        [34, 55, 67, 78, 89, 99, 00],
    ];

    // echo $emp[0][0];
    // echo $emp[0][1];
    // echo $emp[0][2];
    // echo $emp[0][3];
    // echo $emp[0][4];

    echo "<pre>";
    print_r($emp);
    echo "</pre>";

    for ($let = 0; $let < count($emp); $let++) {
        for ($let1 = 0; $let1 < count($emp[$let]); $let1++) {
            echo $emp[$let][$let1];
        }
        echo "<br>";
    }

    $MultiDemon = array(
        "Mobile" => array("ID" => "1", "PRICE" => "22000", "COMPANY" => "VIVO"),
        "Cammera" => array("ID" => "1", "PRICE" => "25000", "COMPANY" => "NIKON"),
        "Laptop" => array("ID" => "1", "PRICE" => "35000", "COMPANY" => "DELL"),
        "Charger" => array("ID" => "1", "PRICE" => "200", "COMPANY" => "MTR")
    );

    // echo "<pre>";
    // print_r($MultiDemon);
    // echo "</pre>";

    echo $MultiDemon["Mobile"]['ID'];
    echo $MultiDemon["Mobile"]['PRICE'];
    echo $MultiDemon["Mobile"]['COMPANY'];
    echo "<br>";
    echo $MultiDemon["Mobile"]['ID'];
    echo $MultiDemon["Mobile"]['PRICE'];
    echo $MultiDemon["Mobile"]['COMPANY'];

    ?>

</body>

</html>