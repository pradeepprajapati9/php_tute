<?php
include('./db/connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ragistration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
  <style>
    body{
        text-transform:capitalize;
    }
  </style>
</head>
<body>
 
<?php
include('./header.php');
$sql="SELECT * FROM studentinfo";
$qry=mysqli_query($con, $sql) or die("Query Failed");
$result=mysqli_num_rows($qry);
if ($result !=0) {
    ?>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Language</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
    <?php while ($data=mysqli_fetch_assoc($qry)) { ?>
        <tbody>
    <tr>
        <td scope="row"><?php echo $data['Id'];?></td>
        <td scope="row"><img src="<?php echo $data['Image']; ?>" alt="" height="50px"  width="100px"></td>
        <td scope="row"><?php echo $data['Name'];?></td>
        <td scope="row"><?php echo $data['Ph_Number'];?></td>
        <td scope="row"><?php echo $data['Email'];?></td>
        <td scope="row"><?php echo $data['Gender'];?></td>
        <td scope="row"><?php echo $data['Lang'];?></td>
        <td scope="row">
            <a href="./update-fetch.php?id=<?php echo $data['Id'];?>">Edit</a>
            <a href="./delete.php?id=<?php echo $data['Id']; ?>">Delete</a>
        </td>
    </tr>
    </tbody>
    <?php
    }
    ?>
 </table>
 <?php
}
?>

</body>
</html>