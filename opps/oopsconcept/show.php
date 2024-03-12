
<style>
    body{
        font-family:sans-serif;
    }
    table{
        border-collapse:collapse;
        border:1px solid black;
        font-weight:bold;

    }
    td{
        border:1px solid black;
        padding:20px;
        color:white;
        background-color:rgba(0,0,0,0.75);
    }
</style>
<?php
 $con= new mysqli("localhost","root","","prectice");
 if($con->connect_error){
    die("Connection Failed".$con->connect_error);
 } else{
    // echo "Connect";
 }

 
 $sql="SELECT * FROM ragister";
 $result=$con->query($sql);
  
 if($result->num_rows > 0){
    while ($row=$result->fetch_assoc()){
    ?>
     
           <table >
           
            <tr>
                <td><?php echo "ID:>>>". $row['Id']; ?></td>
                <td><?php echo"NAME:>>>". $row['NAME']; ?></td>
                <td><?php echo "EMAIL:>>>". $row['EMAIL']; ?></td>
                <td><?php echo "PASSWORD:>>>". $row['PSD'] ;?></td>
                <td><?php echo "PHNUMBER:>>>". $row['PHNUM']; ?></td>
            </tr>
           </table>
    <?php
    }
 }else{
    echo"No Record Found";
 }
 $con->close();
?>