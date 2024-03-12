<?php
include('./database.php');
$database1= new database();

$database1->Select('study',' * ' ,null,null,null,1);
$result=$database1->getResult();

echo"<table border='1' width='500px>'";
echo "
    <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>AGE</th>
    <th>GENDER</th>
    </tr>
      ";
foreach ($result as list("Id"=>$Id,"NAME"=>$Name,"AGE"=>$Age,"GENDER"=>$Gender)) {
    echo "<tr> <td>$Id</td><td>$Name</td><td>$Age</td><td>$Gender</td><tr>";
}
echo"</table>'";

$database1->pagination('study',null,null,2);
 
?>