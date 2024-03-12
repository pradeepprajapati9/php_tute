<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="css/owl.carousel.css">                                                                                               
 <link rel="stylesheet" href="css/owl.theme.green.css">                                                                                               
 <script src="js/jquery.min.js"></script>                                                                                              
 <script src="js/owl.carousel.min.js"></script>
</head>
<style>
    .item{
        width:400px;
        height:200px;
        background-color:skyblue;
        border:1px solid  black;
        text-align:center;
    }
</style>
<body>
    <div class="container">
<div class="owl-carousel owl-theme">
    <div class="item"><h4>1</h4></div>
    <div class="item"><h4>2</h4></div>
    <div class="item"><h4>3</h4></div>
    <div class="item"><h4>4</h4></div>
    <div class="item"><h4>5</h4></div>
    <div class="item"><h4>6</h4></div>
    <div class="item"><h4>7</h4></div>
    <div class="item"><h4>8</h4></div>
    <div class="item"><h4>9</h4></div>
    <div class="item"><h4>10</h4></div>
    <div class="item"><h4>11</h4></div>
    <div class="item"><h4>12</h4></div>
</div>
</div>
<script>
    $(Document).ready(function(){
        $('.owl-carousel').owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    mouseDrag:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
    })
</script>
</body>
</html>