<!DOCTYPE html>
<html lang="en">
<head>
  <?php include '../include/inc.head.php' ?> 
</head>
<body>
  <?php include '../include/inc.nav.php' ?>
  
  <div class="container">

    <section id="profile" class="profile">
      <div class="container">

        <div class="our-title">
          <h2>Member's <span>Profile</span></h2>
          
        </div>

        <div class="row">
          <?php
            $xmlProfile = simplexml_load_file("../xml/Luha_Alano_Moreno_IT2B_FinalProject_ExplorePhilippines.xml") or die("Failed to load");
            $count = 1;
            foreach($xmlProfile->profile as $Profile) { ?>       
              
              <div class="col-lg-4 col-md-6">
                <div class="member">
                  <div class="pic"></div>
                  <img src="../images/Profile/<?php echo $Profile->image ?>" class="img-fluid" alt="">
                  <div class="member-info">
                    <h4> <?php echo $Profile->name ?> </h4>
                    <span> <?php echo $Profile->address ?></span>
                    <div class="social">
                      <a href="<?php echo $Profile->facebook ?>"><i class="fa-brands fa-facebook"></i></i></a>
                      <a href="<?php echo $Profile->instagram ?>"><i class="fa-brands fa-instagram"></i></a>
                      <a href="<?php echo $Profile->github ?>"><i class="fa-brands fa-github"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            <?php $count++; } ?>
        </div>
      </div>
    </section><!-- End profile Section -->
  </div>
  <?php include '../include/inc.footer.php' ?>
  <?php include '../include/inc.script.php' ?>
</body>
</html>  