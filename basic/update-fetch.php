<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upadate Record Here</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

</head>

<body>
<?php
include('./header.php');
        include('./db/connect.php');
         $stuid=$_GET['id'];
         $sql=" SELECT * FROM studentinfo WHERE Id='{$stuid}'";
         $qry= mysqli_query($con, $sql);
         $result=mysqli_num_rows($qry);
         if ($result !=0) {
         while ($data=mysqli_fetch_assoc($qry)) {

            $Uname=$data['Name'];
            $Uph=$data['Ph_Number'];
            $Uemail=$data['Email'];
            $Ugen=$data['Gender'];
            $Ulang=$data['Lang'];
        ?>
    <!-- bootstrap -->
    <!-- form -->
     <form action=" " method="post"  > 
        <div class="container">
        <div class="mb-3">
             <h1 >Upadate Record Here</h1> 
            <!-- <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Select Image</label>
                <input type="file" name="File"  class="form-control border-primary" id="exampleInputPassword1" required>
            </div> -->
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Name</label>
                <input type="text" name="Name" value="<?php echo $Uname ?>"  class="form-control border-primary" id="exampleInputPassword1" required>
            </div>
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Phone Number</label>
            <input type="number" name="Ph" value="<?php echo $Uph ?>"  class="form-control border-primary" id="exampleInputPassword1" required>
        </div>
    
            <label for="exampleInputEmail1"  class="form-label">Email address</label>
            <input type="email"name="Email" value="<?php echo $Uemail?>"  class="form-control border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
    
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Select Gender</label>
            <select name="Gender"  class="form-control border-primary" id="exampleInputPassword1" required>
                <option value="Male" <?php
                    if ($Ugen=='Male') {
                        echo "selected";
                    }
                ?>>Male</option>
                <option value="Female" <?php
                    if ($Ugen=='Female') {
                        echo "selected";
                    }
                ?>>Female</option>
                <option value="Other" <?php
                    if ($Ugen=='Other') {
                        echo "selected";
                    }
                ?>>Other</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Select Language</label>
            <select name="Language"  class="form-control border-primary" id="exampleInputPassword1" required>
                <option value="Hindi"  <?php
                    if ($Ulang=='Hindi') {
                        echo "selected";
                    }
                ?>>Hindi</option>
                <option value="English" <?php
                    if ($Ulang=='English') {
                        echo "selected";
                    }
                ?>>English</option>
                <option value="Punjabi" <?php
                    if ($Ulang=='Punjabi') {
                        echo "selected";
                    }
                ?>>Punjabi</option>
            </select>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input border-primary" id="exampleCheck1"required>
            <label class="form-check-label " for="exampleCheck1">Check me out</label>
        </div>

        <button type="submit" name="update" class="btn btn-primary">Updat</button>
    </div>
    </form>
        <!-- form end -->
    <?php
    }
}
    ?>
<!-- UPDATE FORM QUERY -->
 
<?php
include("./db/connect.php");
if(isset($_POST['update'])){
       $stuid=$_GET['id'];
         $Rname=mysqli_real_escape_string($con, $_POST['Name']);
         $Rph=mysqli_real_escape_string($con, $_POST['Ph']);
         $Remail=mysqli_real_escape_string($con, $_POST['Email']);
         $Rgender=mysqli_real_escape_string($con, $_POST['Gender']);
         $Rlanguage=mysqli_real_escape_string($con, $_POST['Language']);
        $sql="UPDATE studentinfo SET Name='$Rname', Ph_Number='$Rph',Email='$Remail',Gender='$Rgender',Lang='$Rlanguage' WHERE Id='$stuid'";
        $qry=mysqli_query($con,$sql);
        if($qry){
            echo "<script>alert('Records Updated')</script>";
        }else{
            echo "<script>alert('Records Not Update')</script>";

        }
  }
 ?>
</body>


</html>