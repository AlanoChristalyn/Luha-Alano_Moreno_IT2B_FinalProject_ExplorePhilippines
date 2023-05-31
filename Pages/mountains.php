<!DOCTYPE html>
<html lang="en">
<head>
  <?php include '../include/inc.head.php' ?> 
</head>
<body>
  <?php include '../include/inc.nav.php' ?>
  <div class="row justify-content-md-center mt-5">
    <div class="center col-md-11">
      <img src="../images/Mountain/bg_1.jpg" class="card-img-top" alt="...">
    </div>
  </div>
  <div class="container">
    <div class="row justify-content-md-center mt-5">
      <div class="our-title col-md-11">
        <h2>Mountains in <span>Philippines</span></h2>
      </div>
    </div>
    <?php
      $xmlMountains = simplexml_load_file("../xml/Luha_Alano_Moreno_IT2B_FinalProject_ExplorePhilippines.xml") or die("Failed to load");
      $count = 1;
      foreach($xmlMountains->mountains as $Mountains) { ?>       
        <div class="row justify-content-md-center mt-5">
          <div class="categories col-md-auto">
            <h2><?= $Mountains->name ?></h2>
            <div class="card">
              <img src="../images/Mountain/image (<?php echo $count ?>).jpg" class="card-img-top" alt="...">
              <div class="meaning card-body">
                <h3 class="card-title"></h3>
                <h5 class="card-title"><?php echo $Mountains->location ?></h5>
                <p class="card-text"><?php echo $Mountains->description ?></p>
              </div>
            </div>
          </div>
        </div>
    <?php $count++; } ?>
  </div>
  <?php include '../include/inc.footer.php' ?>
  <?php include '../include/inc.script.php' ?>
</body>
</html>  