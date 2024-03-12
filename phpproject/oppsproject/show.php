<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Show Detail In Php</title>
</head>
<body>
    <?php
    //  connection
    $con=new mysqli("localhost","root","","testcrud");
    // check connect
    if($con->connect_error){
        echo "Connection Failde".$con->connect_error;
    }else{
        echo "Connect";
    }

    // database detail show qurey
    $sql="SELECT * FROM studentinfo";
    $result=$con->query($sql);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
                ?>
                   <table border=1 >
           
           <tr>
               <td><?php echo "ID:>>>". $row['Id']; ?></td>
               <td><?php echo"NAME:>>>". $row['Name']; ?></td>
               <td><?php echo "NUMBER:>>>". $row['Ph_Number']; ?></td>
               <td><?php echo "PASSWORD:>>>". $row['Psd'] ;?></td>
               <td><?php echo "EMAIL:>>>". $row['Email']; ?></td>
               <td><?php echo "GENDER:>>>". $row['Gender']; ?></td>
               <td><?php echo "LANGUAGE:>>>". $row['Lang']; ?></td>
           </tr>
          </table>

                <?php
        }
    }
    ?>
</body>
</html>