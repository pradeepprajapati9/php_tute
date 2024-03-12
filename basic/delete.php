<?php
include('./header.php');
include("./db/connect.php");
$stuid=$_GET['id'];
 $sql="DELETE FROM studentinfo WHERE Id='$stuid'";
 $qry=mysqli_query($con,$sql);
 if($qry){
    echo "Records Deleted";
 }else{
    echo "Record Not Delete";
 }
 header("location: http://localhost/prectice/php/basic/student.php");
?>