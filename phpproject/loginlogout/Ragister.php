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
    <!-- bootstrap -->
    <!-- form -->
     <form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 
        <div class="container">
        <div class="mb-3">
             <h1 class="m-auto">Ragistration Form</h1> 
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Name</label>
                <input type="text" name="Name"  class="form-control" id="exampleInputPassword1" required>
            </div>
            <label for="exampleInputEmail1"  class="form-label">Email address</label>
            <input type="email"name="Email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="Psd"  class="form-control" id="exampleInputPassword1" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Ph Number</label>
            <input type="number" name="Ph"  class="form-control" id="exampleInputPassword1" required>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1"required>
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <a href="./login.php" class="btn btn-primary">Login</a>
    </div>
    </form>
    <!-- form end -->
    
</body>
<?php
if (isset($_POST['submit'])) {
    include("./db/connection.php");
    $U_name=mysqli_real_escape_string($con,$_POST['Name']);
    $U_email=mysqli_real_escape_string($con,$_POST['Email']);
    $U_psd=mysqli_real_escape_string($con,md5($_POST['Psd']));
    $U_ph=mysqli_real_escape_string($con,$_POST['Ph']);
    $sql="INSERT INTO ragister(NAME,EMAIL,PSD,PHNUM) VALUES('$U_name','$U_email','$U_psd','$U_ph')";
    $qry=mysqli_query($con,$sql) or die("Query Failed");
    if($qry){
        echo"<div class='bg-primary'><script>alert('Ragistration Successfull')</script></div>";
    }else{
        echo"<div class='bg-danger'><script>alert('Ragistration Failed Please Try Again')</script></div>";

    }

}
?>


</html>