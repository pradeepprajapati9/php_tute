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

        "id" => 1,
        "F" => "anil",
        "L" => "kapoor",
    );

    $newarry = array_flip($sallery); // flip the array
    echo "<pre>";
    print_r($newarry);
    echo "</pre>";

    $newupper = array_change_key_case($sallery,CASE_UPPER); //  you can chage uppercase
    echo "<pre>";
    print_r($newupper);
    echo "</pre>";


    $newlower = array_change_key_case($sallery,CASE_LOWER); //you can chage lowercase
    echo "<pre>";
    print_r($newlower);
    echo "</pre>";



    ?>

</body>

</html>