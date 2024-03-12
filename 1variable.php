<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // output way in php
    echo "pradeep<br>";

    echo "pradeep " . "kumar<br>";
    echo "sandeep ", "kumar ", "<br>";
    // print("pradeep","mobile"); //do not use coma only 
    // print("pradeep","mobile"); //use dot in print

    $age = 18;
    $result = ($age >= 18) ? ("you are eligible") : ("you are not eligible");
    echo $result . "<br>";

    //grade print

    $marks = 87;
    if ($marks >= 80 && $marks <= 100) {
        echo "Grade A+";
    } elseif ($marks >= 70 && $marks < 80) {
        echo "Grade B";
    } elseif ($marks >= 60 && $marks < 70) {
        echo "Grade C";
    } elseif ($marks >= 50 && $marks < 60) {
        echo "Grade D";
    } elseif ($marks >= 33 && $marks < 50) {
        echo "Grade E";
    } elseif ($marks >= 0 && $marks < 33) {
        echo "Grade F";
    } else {
        echo "Invalid Marks";
    }

    echo "<br>";
    $vowel = 'w';

    switch ($vowel) {
        case 'a':
        case 'A':
        case 'e':
        case 'E':
        case 'i':
        case 'I':
        case 'o':
        case 'O':
        case 'u':
        case 'U':
            echo "Vowel<br>";
            break;
        default:
            echo "Consonant";
    }

    echo "<br>";

    for ($a = 0; $a < 10; $a++) {
        echo $a;
    }

    for ($a = 1; $a < 9; $a++) {
        for ($b = 1; $b <= $a; $b++) {
            echo $b;
        }
        echo "<br>";
    }


    // array
    $color = array("red", "blue", "green", "yellow");
    print_r($color);
    echo $color[0] . "<br>";
    echo $color[1] . "<br>";
    echo $color[2] . "<br>";
    echo $color[3] . "<br>";

    //associative arry
    // $color1 = array("red" => "red", "blue" => "blue", "green" => "green", "yellow" => "yellow");
    // print_r($color1);

    $Device = [
        "mobile" => "iphone",
        "laptop" => "mac",
        "desktop" => "windows",
        "laptop" => "mac",
        "desktop" => "windows",
        "laptop" => "mac",
        "desktop" => "windows",
        "laptop" => "mac"
    ];

    // print_r($Device);
    // echo $Device["mobile"];
    // echo $Device["laptop"];
    // echo $Device["desktop"];

    foreach ($Device as $key => $value) {
        echo $key . " " . $value . "<br>";
    }


    //multidimensional array
    $emp = [
        [23, 233, 566, 77, 789, 9, 987],
        [23, 233, 566, 77, 789, 9, 987],
        [23, 233, 566, 77, 789, 9, 987],
        [23, 233, 566, 77, 789, 9, 987],
        [23, 233, 566, 77, 789, 9, 987],
    ];

    // echo "<pre>";
    // print_r($emp);
    // echo "</pre>";
    // echo $emp[0][0];
    // echo $emp[0][1];
    // echo $emp[0][2];

    echo (count($emp));
   
    echo "<br>";
    for ($i = 0; $i < count($emp); $i++) {
        for ($j = 0; $j < count($emp[$i]); $j++) {
            echo $emp[$i][$j] . " ";
        }
        echo "<br>";
    }
    ?>


</body>

</html>