<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="./server1.php" method="post" autocomplete="off">
        <input type="text" name="name">
        <input type="number" name="number" id="">
        <input type="number" name="age" id="">
        <input type="submit" name="submit">
    </form>


    <!-- same page per action -->
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" autocomplete="off">
        <input type="text" name="name">
        <input type="number" name="number" id="">
        <input type="number" name="age" id="">
        <input type="submit" name="submit">
    </form>
</body>

</html>