<?php
header('Content-Type: application/json');
header('Acess-Control-Allow-Origin: *');
header('Acess-Control-Allow-Method: POST');
header('Acess-Control-Allow-Headers:Acess-Control-Allow-Headers,Content-Type,Acess-Control-Allow-Method,Authorization,X-Requested_With');

$data=json_decode(file_get_contents("php://input"),true);

include("../db/connection.php");
$stu_id=$data['Id'];
$stu_name=$data['NAME'];
$stu_email=$data['EMAIL'];
$stu_psd=md5($data['PSD']);
$stu_phnum=$data['PHNUM'];
$sql="UPDATE ragister SET NAME='$stu_name',EMAIL='$stu_email',PSD='$stu_psd',PHNUM='$stu_phnum' WHERE Id='$stu_id'";
if(mysqli_query($con,$sql)){
    echo json_encode(array('message'=> 'Student  Record  Updated.','status'=>true));
}else{
    echo json_encode(array('message'=> 'Student Record Not Update.','status'=>false));
}
?>
