<?php
header('Content-Type: application/json');
header('Acess-Control-Allow-Origin: *');
header('Acess-Control-Allow-Method: POST');
header('Acess-Control-Allow-Headers:Acess-Control-Allow-Headers,Content-Type,Acess-Control-Allow-Method,Authorization,X-Requested_With');

$data=json_decode(file_get_contents("php://input"),true);

include("../db/connection.php");
$stu_name=$data['NAME'];
$stu_email=$data['EMAIL'];
$stu_psd=md5($data['PSD']);
$stu_phnum=$data['PHNUM'];
$sql="INSERT INTO ragister (NAME,EMAIL,PSD,PHNUM) VALUES('$stu_name','$stu_email','$stu_psd',$stu_phnum)";
if(mysqli_query($con,$sql)){
    echo json_encode(array('message'=> 'Student  Record  Insert.','status'=>true));
}else{
    echo json_encode(array('message'=> 'Student Not Record  Insert.','status'=>false));
}
?>