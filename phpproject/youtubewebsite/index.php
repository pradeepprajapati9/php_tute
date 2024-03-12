<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="./images/certificate.jpg">
  <title>Document</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
  href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;1,400;1,600&display=swap"
  rel="stylesheet">
<link rel="stylesheet" href="./css/style.css">

<body>
  <!-- navbar start -->

  <nav id="home" class="navbar bg-dark navbar-expand-lg navbar-danger  bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">ProjectClub</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#gallery">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contect">Contect</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2 text-dark" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- navbar end -->

  <!-- carousel start -->
 
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner  ">
      <div class="carousel-item active">
        <img src="./images/slider1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-light bg-dark">First slide label</h5>
          <p class="text-light bg-dark">Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./images/slider2.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-light bg-dark">Second slide label</h5>
          <p class="text-light bg-dark">Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./images/slider3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-light bg-dark">Third slide label</h5>
          <p class="text-light bg-dark">Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bg-dark " aria-hidden="true"></span>
      <span class="visually-hidden ">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
 
  <!-- carousel end -->

  <!-- about page -->
  <section>
    <div id="about" class="py-5">
      <h1 class="text-center">About page</h1>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="./images/slider4.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h2>I am Pradeep Web Designing From Delhi</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae nisi nemo provident id debitis numquam
            temporibus aperiam iusto? Rerum numquam dicta perspiciatis? Consectetur, porro? Tempora, ab nobis dicta
            laborum quam earum rem maxime incidunt laudantium commodi laboriosam quia rerum quas, ut, cumque cupiditate
            unde dignissimos hic in maiores impedit. Adipisci.</p>
          <a href="about.php" class="btn btn-primary">Check More</a>
        </div>
      </div>
    </div>
  </section>
  <!-- about end -->

  <!-- services page -->
  <section id="services" class="my-5  ">
    <div class="py-5">
      <h1 class="text-center">Our Services</h1>
    </div>
    <div class="container-fluid">
      <div class="card-group">
        <div class="card">
          <img src="./images/user2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Johan Die</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
              content. This content is a little bit longer.</p>
            <p class="card-text"><a href="#" class="btn btn-primary">See Profile</a></p>
          </div>
        </div>
        <div class="card">
          <img src="./images/user2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Vijay Arora</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
              content. This content is a little bit longer.</p>
            <p class="card-text"><a href="#" class="btn btn-primary">See Profile</a></p>
          </div>
        </div>
        <div class="card">
          <img src="./images/user2.jpg" class="card-img-top " alt="...">
          <div class="card-body">
            <h5 class="card-title">Vikki Rathor</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
              content. This content is a little bit longer.</p>
            <p class="card-text"><a href="#" class="btn btn-primary">See Profile</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- services end -->

  <!-- gallery start -->
  <section id="gallery" class="my-5">
    <h1 class="text-center">Our Gallery</h1>
    <div class="py-5">
      <div class="container-fluid">
        <div class="row  ">
          <div class="col-lg-4 col-md-4 col-12">
            <img src="./images/user1.jpg" alt="" class="pb-3 img-fluid img-thumbnail">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="./images/user1.jpg" alt="" class="pb-3 img-fluid img-thumbnail">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="./images/user1.jpg" alt="" class="pb-3 img-fluid img-thumbnail">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="./images/user1.jpg" alt="" class="pb-3 img-fluid img-thumbnail">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="./images/user1.jpg" alt="" class="pb-3 img-fluid img-thumbnail">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="./images/user1.jpg" alt="" class="pb-3 img-fluid img-thumbnail">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- gallery end -->

  <!-- form start -->
  <section id="contect" class="">
    <div class="py-2">
      <h1 class="text-center">Ragister Here</h1>
    </div>
    <div class="w-100 bg-dark text-white  m-atuo p-5 container">
      <form action="<?php $_SERVER['PHP_SELF'] ?>" class="   " method="post">
       <div class="form-group">
        <label for="">Username</label>
        <input type="text" name="username" required autocomplete="off" class="form-control border border-primary">
       </div>
       <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="useremail" required autocomplete="off" class="form-control border border-primary">
       </div>
       <div class="form-group ">
        <label for="">Password</label>
        <input type="password" name="userpsd" required autocomplete="off" class="form-control border border-primary">
       </div>
       <div class="form-group">
        <label for="">Phone Number</label>
        <input type="number" name="userph"  requiredautocomplete="off" class="form-control border border-primary">
       </div>
       <div class="form-group">
        <label for="">Message</label>
       <textarea name="usermsg" id="" required cols="30" rows="5" class="form-control border border-primary"></textarea>
       </div>
       <div class="form-group">
        <input type="checkbox" required class="  border border-primary ">
        <label for="">  Please Check This Field</label>
       </div>
       <div class="form-group">
        <input type="submit"  name="submit" class="btn btn-success border border-primary">
       </div>
      </form>
    </div>
  </section>
  <!-- form end -->

  <!-- footer start -->
    <footer>
      <p class="bg-dark p-3 text-white text-center" >@ProjectClub 2023 Creation By PradeepBloger</p>
    </footer>
  <!-- footer end -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

<?php
 $con=mysqli_connect("localhost","root","","exercise");
 if($con){
  // echo "Connect";
 }else{
  echo"Failed";
 }
if (isset($_POST['submit'])) {
    $username =mysqli_real_escape_string($con, $_POST['username']);
    $useremail =mysqli_real_escape_string($con, $_POST['useremail']);
    $userpsd =mysqli_real_escape_string($con, md5($_POST['userpsd']));
    $userph =mysqli_real_escape_string($con, $_POST['userph']);
    $usermsg =mysqli_real_escape_string($con, $_POST['usermsg']);

    $sql=" INSERT INTO exercisesave(NAME,EMAIL,PASSWORD,PHNUMBER,MSG)
 VALUES('$username','$useremail','$userpsd','$userph','$usermsg')";

    $qry=mysqli_query($con, $sql);
    if ($qry) {
        echo "<script> alert('Record Inserted')</script>";
    } else {
        echo "<script> alert('Record Not Inserted')</script>";
    }
}
?>
</html>