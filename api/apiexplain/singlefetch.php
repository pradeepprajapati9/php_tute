<?php
header('Content-Type: application/json');
header('Acess-Control-Allow-Origin: *');
$data=json_decode(file_get_contents("php://input"),true);
include("../db/connection.php");
$stu_id=$data['Id'];
$sql="SELECT * FROM ragister WHERE Id='$stu_id'";
$result=mysqli_query($con,$sql) or die("Query Failed");

if(mysqli_num_rows($result)>0){

  $output=mysqli_fetch_all($result,MYSQLI_ASSOC);
  echo json_encode($output);
}else{
    echo json_encode(array('message'=> 'No Record Found.','status'=>false));
}
?>