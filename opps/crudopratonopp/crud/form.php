<?php
include('./database.php');
$database1= new database();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
    <style>
        body{
            font-family:sans-serif;
            font-weight:bold;
            background-color:skyblue;
        }
        form{
            border:1px solid black;
            width:400px;
            margin:200px auto;
            padding:20px;
        }
    </style>
</head>
<body>
    <form action="save-data.php" method="post">
        <label for="">Name</label> <br>
        <input type="text" name="Fname" placeholder="Name*"> <br>
        <label for="">Age</label> <br>
        <input type="text" name="Age" placeholder="Age*"> <br>
        <label for="">Gender</label><br>
        Male:<input value="Male" type="radio" name="Gender">
        Female:<input value="Female" type="radio" name="Gender"> <br>
        <input type="submit" name="submit">
    </form>
</body>
</html>