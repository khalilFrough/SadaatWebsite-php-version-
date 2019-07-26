<!DOCTYPE html>
<html lang="en">
<?php
$pageId =1 ;
include dirname(__FILE__).'/includes/externalJavaScript.php';
include dirname(__FILE__).'/includes/tools.php';
printHead('Home')?>

  <body>
    <!-- including the head  -->
    <?php include dirname(__FILE__).'/includes/head.php';?> 

    <!-- the main picutre with blur effect stats here -->
    <section class="showcase">
        <!-- this is the main container which has the picture and the title inside it -->
        <div class="content">
            <img class="logo"src="../media/logo1.png" alt=" the logo picture goes here"width="200px"heigth="180px">
            <div class="title">Welcome to S&G Tiling</div>
            <div class="text"> <h2>Where we offer the best services and great customer satisfaction</h2></div>
        </div>
    </section>
    <!-- the services Section starts from here -->
    <div class="container">
      <h1 class="heading">We Offer the follwing Services</h1>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
          <!-- first Card starts here -->
              <div class="card">
                <div class="card__side card__side--front">
                  <div class="card__picture card__picture--1">&nbsp;</div>
                <h4 class="card__heading">
                  <span class="card__heading-span card_heading--span--1">Tiling</span>
                </h4>
                <div class="card__details">
                  <ul>
                    <li>Floor Tile</li>
                    <li>Wall Tile</li>
                    <li>Water Proof</li>
                    <li>Screed</li>
                  </ul>
                </div>
                </div>
              </div>
          <!-- first Card finishes here -->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
            <!-- card 2 stars from here -->
            <div class="card">
                <div class="card__side card__side--front">
                  <div class="card__picture card__picture--2">&nbsp;</div>
                <h4 class="card__heading">
                  <span class="card__heading-span card_heading--span--1">Stone</span>
                </h4>
                <div class="card__details">
                  <ul>
                    <li>Natural Stone</li>
                    <li>Granite</li>
                    <li>Marbel</li>
                    <li>Ceramic</li>
                  </ul>
                </div>
                </div>
              </div>
            <!-- card 2 end in here -->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
            <!-- card 3 starts from here  -->
            <div class="card">
                <div class="card__side card__side--front">
                  <div class="card__picture card__picture--3">&nbsp;</div>
                <h4 class="card__heading">
                  <span class="card__heading-span card_heading--span--1">Flooring</span>
                </h4>
                <div class="card__details">
                  <ul>
                    <li>Timber</li>
                    <li>Laminate</li>
                    <li>Carpet</li>
                    <li>Tile (Natural Stone)</li>
                  </ul>
                </div>
                </div>
              </div>
            <!-- card 3 ends in here -->
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
            <!-- card 4 starts in here  -->
            <div class="card">
                <div class="card__side card__side--front">
                  <div class="card__picture card__picture--4">&nbsp;</div>
                <h4 class="card__heading">
                  <span class="card__heading-span card_heading--span--1">Quotes</span>
                </h4>
                <div class="card__details">
                  <ul>
                    <li>Free Quotes</li>
                    <li> <a href="estimation.php">Estimation Tool</a></li>
                    <li>Free Measurement</li>
                    <li>Great Services</li>
                  </ul>
                </div>
                </div>
              </div>
            <!-- card 4 ends in here -->
          </div>
        </div>
    </div>
    <!-- footer starts from here -->
    <?php
    include dirname(__FILE__).'/includes/footer.php';?>
  </body>
</html>