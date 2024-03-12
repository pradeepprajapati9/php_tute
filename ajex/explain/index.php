<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Ajax </title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
     <?php
     include("header.php");
     ?>
     <table border id="save-data">
        <tr>
            <td> Name:</td>
            <td><input type="text" name="Fname"></td>
            <td><button id="savedata">Save Data</button></td>
        </tr>
    </table>
    <table border id="table-data">
        <tr>
        <td><button id="loaddata">Load Data</button> </td>            
        </tr>
    </table>
    <script src="../js/jquery.js"></script>
    <script>
        $(document).ready(function(){
            $("#loaddata").on("click",function(e){
                $.ajax({
                    url : "http://localhost/prectice/php/ajex/explain/ajaxload.php",
                    type : "POST",
                    success : function(data){
                    $("#table-data").html(data);
                    }
                })
            })
        })
    </script>
</body>
</html>