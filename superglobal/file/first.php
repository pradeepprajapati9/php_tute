<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_FILES['imges'])) {
        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";

        $name = $_FILES['imges']['name'];
        $size = $_FILES['imges']['size'];
        $type = $_FILES['imges']['type'];
        $tmp_name = $_FILES['imges']['tmp_name'];

        if (move_uploaded_file($tmp_name, './upload/' . $name)) {
            echo "uploaded";
        } else {
            echo "not uploaded";
        }
    }
    ?>


   <a href="./upload/"></a>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="imges">
        <input type="submit">
    </form>



</body>

</html>