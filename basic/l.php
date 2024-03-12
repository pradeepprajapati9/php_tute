 <?php
 session_start();
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

</head>

<body>
    <!-- bootstrap -->
    <!-- form -->
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 
        <div class="container">
        <div class="mb-3">
             <h1>Login Form</h1> 
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="Email" class="form-control  border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="Psd" class="form-control  border-primary" id="exampleInputPassword1" required>
        </div>
         

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>

        <button type="submit" name="login" class="btn btn-primary">Login</button>
        <a href="./r.php" class="btn btn-primary">Back</a>   

    </div>
    </form>
    <!-- form end -->
</body>
<?php
include("./db/connect.php");
if(isset($_POST['login'])){
    $Lemail=mysqli_real_escape_string($con, $_POST['Email']);
    $Lpsd=mysqli_real_escape_string($con, md5($_POST['Psd']));
    $sql="SELECT * FROM studentinfo WHERE Email='$Lemail' AND Psd='$Lpsd'";
    $qry=mysqli_query($con,$sql) or die("Query Failed");
    $data=mysqli_fetch_array($qry);
    if(is_array($data)){
        $_SESSION['Uname']=$data['Name'];
        $_SESSION['username']=$data['Email'];
        $_SESSION['uid']=$data['Id'];
        if(isset($_SESSION['username'])){
            header("location: http://localhost/prectice/php/basic/student.php");
        }
    }else{
        echo " <p style='color:red; margin:auto;'>Invaled Username Or Password</p>";
    }  
}
?>
 
</html>