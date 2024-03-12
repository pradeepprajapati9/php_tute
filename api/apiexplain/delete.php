<?php
header('Content-Type: application/json');
header('Acess-Control-Allow-Origin: *');
header('Acess-Control-Allow-Method: DELETE');
header('Acess-Control-Allow-Headers:Acess-Control-Allow-Headers,Content-Type,Acess-Control-Allow-Method,Authorization,X-Requested_With');

$data=json_decode(file_get_contents("php://input"),true);

include("../db/connection.php");
$stu_id=$data['Id'];
$sql="DELETE FROM ragister WHERE Id='$stu_id'";
if(mysqli_query($con,$sql)){ 
    echo json_encode(array('message'=> 'Record Deleted.','status'=>true));
  
}else{
    echo json_encode(array('message'=> ' Record Not Delete.','status'=>false));
}
?>      