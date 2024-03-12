<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $fruts = ["Apple", "Banana", "Orange", "Mango"];

    $newFruits = array_slice($fruts, 2, 2);
    echo "<pre>";
    print_r($newFruits);
    
    

    ?>
</body>

</html>