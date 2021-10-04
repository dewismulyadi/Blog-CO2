<HEADER.PHP 
!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="blog-co2.css" rel="stylesheet" />
    <title>Hello, world!</title>
  </head>
  <body>
    <!-- Header Navigation -->
    <div class="container-fluid bg-darkalt">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom ">
            
            <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <img src="img/logo.png" class="d-inline-block px-lg-4">
            </a>

            <ul class="nav nav-pills nav-blog">
                <li class="nav-item"><a href="#" class="nav-link text-light"><strong>PROFILE</strong></a></li>
                <li class="nav-item"><a href="#" class="nav-link text-light"><strong>NEWS</strong></a></li>
                <li class="nav-item"><a href="#" class="nav-link text-light"><strong>ARTICLES</strong></a></li>
                <li class="nav-item"><a href="#" class="nav-link text-light"><strong>COMMENTS</strong></a></li>
               
            </ul>
        </header>
    </div>
    <!-- End of Header Navigation -->
<?php include header.php ?>
    <!-- Content -->
    <div class="container">

     <div class="row row-1 bg-darkalt rounded rounded-alt text-light ">
         <div class="col-md-6">
            <div class="d-flex flex-column justify-content-center align-items-center h-100 px-4"> 
                <h1 class="align-middle">Collection of Latest Articles and News</h1>
                <p>We are here to collect news and articles from all national, international and trusted sources and are always updated in gathering news.</p>
            </div>
         </div>
         <div class="col-md-6 p-4">
            <img src="img/slider1.jpg" alt="Slider 1" class="img-fluid rounded rounded-alt" >
         </div>
     </div>
     
     <div class="row">
         <div class="col-12 text-center py-5">
            <h1>Welcome to Collection of Latest</h1>
            <h1 class="text-yellow">Articles and News</h1>
            <h4><strong>“Updated and Reliable”</strong></h4>
         </div>
     </div>

    </div>


<?php include footer.php ?>

FOOTER.PHP
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>