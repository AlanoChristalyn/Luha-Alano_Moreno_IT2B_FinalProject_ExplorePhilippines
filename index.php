<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/img/logo1.png">
    <title>Explore Phippines</title>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-4.6.2-dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="https://use.typekit.net/oov2wcw.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <img src="assets/img/logo2.png" class="d-block w-25" alt="...">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/profile.php">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/about.php">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
              Categories
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="pages/beaches.php">Beaches</a>
              <a class="dropdown-item" href="pages/outdoor.php">Outdoor Activities</a>
              <a class="dropdown-item" href="pages/museums.php">Museums</a>
              <a class="dropdown-item" href="pages/historical.php">Historical Places</a>
              <a class="dropdown-item" href="pages/island.php">Island</a>
              <a class="dropdown-item" href="pages/parks.php">Park</a>
              <a class="dropdown-item" href="pages/churches.php">Churches </a>
              <a class="dropdown-item" href="pages/falls.php">Falls</a>
              <a class="dropdown-item" href="pages/hotspring.php">Natural Hot Spring </a>
              <a class="dropdown-item" href="pages/mountains.php">Mountains</a>
              <a class="dropdown-item" href="pages/reef.php">Reef</a>
              <a class="dropdown-item" href="pages/markets.php">Markets</a>
            </div>
          </li>
        </ul>
        
      </div>
  </nav>
  <div>
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/image_1.jpg" class="d-block w-100" alt="...">
          <div class="front carousel-caption d-none d-md-block">
            <h2>EXPLORE  <span>PHILIPPINES</span></h2>
            <p>One of Asia's most popular tourist destinations is known for its impressively rich biodiversity, numerous different heritage towns, tropical beaches, rainforests,stunning diving spots, and much more.The country is located on an archipelago consisting of over seven thousand islands.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/image_2.png" class="d-block w-100" alt="...">
          <div class="front carousel-caption d-none d-md-block">
            <h2>EXPLORE <span> PHILIPPINES</span></h2>
            <p>One of Asia's most popular tourist destinations is known for its impressively rich biodiversity, numerous different heritage towns, tropical beaches, rainforests,stunning diving spots, and much more.The country is located on an archipelago consisting of over seven thousand islands.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/image_3.jpg" class="d-block w-100" alt="...">
          <div class="front carousel-caption d-none d-md-block">
            <h2>EXPLORE <span> PHILIPPINES</span></h2>
            <p>One of Asia's most popular tourist destinations is known for its impressively rich biodiversity, numerous different heritage towns, tropical beaches, rainforests,stunning diving spots, and much more.The country is located on an archipelago consisting of over seven thousand islands.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button>
  </div>
  <div class="center container">
    <div class="row mt-5 mb-2">
      <div class="our-title col-sm-12">
        <h2>TOURIST SPOTS IN THE <span>PHILIPPINES!</span></h2>       
      </div>
    </div>
    <div class="row">
      <?php
        $xmlIndex = simplexml_load_file("xml/Luha_Alano_Moreno_IT2B_FinalProject_ExplorePhilippines.xml") or die("Failed to load");
        $count = 1;
        foreach($xmlIndex->index as $Index) { ?>       
          <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
              <img src="images/<?php echo $Index->image ?>" class="card-img-top" alt="image 4">
              <div class="card-body">
                <h5> <?php echo $Index->title ?></h5>
                <p class="card-text"> <?php echo $Index->description ?></p>
              </div>
            </div>
          </div>
        <?php $count++; } ?>
    </div>
  </div> 
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Let's Travel And Explore Philippines!</h3>
      <p>It's More Fun In The Philippines!</p>
      <div class="copyright">
        &copy; Copyright <strong><span>Explore Philippines</span></strong>. All Rights Reserved
      </div>
      
    </div>
  </footer><!-- End Footer -->
</div>
 <script src="assets/jquery/jquery.slim.min.js"></script>
 <script src="assets/bootstrap-4.6.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>  