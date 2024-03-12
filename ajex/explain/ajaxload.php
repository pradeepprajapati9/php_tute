<?php
include("../db/connection.php");
$sql="SELECT * FROM ragister";
$qry=mysqli_query($con,$sql) or die("Query failed");
$output="";
if (mysqli_num_rows($qry)>0) {
    $output='<table border="">
         <tr>
        <td>Id</td>
        <td>Name</td>
        </tr>
        </table>';
        while($row=mysqli_fetch_assoc($qry)){
          $output.="
          <tr>
          <td>{$row['Id']}</td>
          <td>{$row['NAME']}</td>
          </tr>";
        }
        $output.="</table>";
        echo $output;
}else{
  echo"Record Not Found";
}
?>