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

</head>

<body>
    <?php
include('./header.php');
    ?>
    <!-- bootstrap -->
    <!-- form -->
     <form action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data"> 
        <div class="container">
        <div class="mb-3">
             <h1 >Ragistration Form</h1> 
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Select Image</label>
                <input type="file" name="File"  class="form-control border-primary" id="exampleInputPassword1" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Name</label>
                <input type="text" name="Name"  class="form-control border-primary" id="exampleInputPassword1" required>
            </div>
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Phone Number</label>
            <input type="number" name="Ph"  class="form-control border-primary" id="exampleInputPassword1" required>
        </div>
    
            <label for="exampleInputEmail1"  class="form-label">Email address</label>
            <input type="email"name="Email"  class="form-control border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="Psd"  class="form-control border-primary" id="exampleInputPassword1" required>
        </div>
        
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Select Gender</label>
            <select name="Gender"  class="form-control border-primary" id="exampleInputPassword1" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Select Language</label>
            <select name="Language"  class="form-control border-primary" id="exampleInputPassword1" required>
                <option value="Hindi">Hindi</option>
                <option value="English">English</option>
                <option value="Punjabi">Punjabi</option>
            </select>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input border-primary" id="exampleCheck1"required>
            <label class="form-check-label " for="exampleCheck1">Check me out</label>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <a href="./l.php" class="btn btn-primary">Login</a>
    </div>
    </form>
    <!-- form end -->
</body>
 <?php
    include('./db/connect.php');
     if (isset($_POST['submit'])) {
         if (isset($_FILES['File'])) {
             $file_name=$_FILES['File']['name'];
             $tmp_name=$_FILES['File']['tmp_name'];
             $folder="./upload/".$file_name;
             move_uploaded_file($tmp_name, $folder);
         }
         
         $Rname=mysqli_real_escape_string($con, $_POST['Name']);
         $Rph=mysqli_real_escape_string($con, $_POST['Ph']);
         $Remail=mysqli_real_escape_string($con, $_POST['Email']);
         $Rpsd=mysqli_real_escape_string($con, md5($_POST['Psd']));
         $Rgender=mysqli_real_escape_string($con, $_POST['Gender']);
         $Rlanguage=mysqli_real_escape_string($con, $_POST['Language']);

         if ($file_name !="") {
             $sql="INSERT INTO studentinfo(Image,Name,Ph_Number,Email,Psd,Gender,Lang)VALUES('$folder','$Rname','$Rph','$Remail','$Rpsd','$Rgender','$Rlanguage')";
             $qry=mysqli_query($con, $sql) or die("Query Failed");
             if ($qry) {
                 echo "<script>alert('Data Insert Successfully')</script>";
             } else {
                 echo "<script>alert('Data Not Insert  ')</script> ";
             }
            header('location: http://localhost/prectice/php/basic/index.php');
         }
     }
     ?>

</html>