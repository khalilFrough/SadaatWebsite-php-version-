<!DOCTYPE html>
<html lang="en">
<?php
include dirname(__FILE__).'/includes/externalJavaScript.php';
include dirname(__FILE__).'/includes/tools.php';
printHead('AboutUs')?>
<body>
 <!-- including the head  -->
 <?php include dirname(__FILE__).'/includes/head.php';?> 
<!-- the main body stats from here -->
<div class="container">
  <div class="row">
    <div class=" col-lg-3 col-md-4 col-sm-5 col-xs-12">
      <!-- the catagory class stats from here -->
      <div class="category">
        <div class="heading">Category</div>
        <ul class="category-list">
          <li class="category-list-item"><a href="#" class="category-list-item-link">Wall Tiling</a></li>
          <li class="category-list-item"><a href="#" class="category-list-item-link">Floor Tiling</a></li>
          <li class="category-list-item"><a href="#" class="category-list-item-link">Water Proofing</a></li>
          <li class="category-list-item"><a href="#" class="category-list-item-link">Screed</a></li>
          <li class="category-list-item"><a href="#" class="category-list-item-link">Ceramic Tiles</a></li>
          <li class="category-list-item"><a href="#" class="category-list-item-link">Natural Stones</a></li>
          <li class="category-list-item"><a href="#" class="category-list-item-link"> Marbles</a></li>
         
        </ul>
      </div>
    </div>
    <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
      <!-- the text of about us starts from here -->
      <div class="about-us">
          <div class="title"><h1 class="heading">Our History</h1></div>
          <p>S&G tiling company is a legally registered tiling company, which provides commercial and residential tiling services. We are a professional and dedicative team with over 20 years of tiling experience in the industry. Our team of tiling specialists is highly trained in experienced in the tiling trade, having undertaken extensive luxury retail tiling projects to standard bathrooms preparation, waterproofing, tiling and screed. </p>
          <div class="title"><h1 class="heading">Our Values</h1></div>
          <p>We value our customers and their satisfaction. We always aim to provide high quality outcomes that suits your specific requirement with an impeccable services at competitive prices. Moreover, we provide free quotes and free measurement services .</p>
      </div>
    </div>
  </div>
  <!-- the services section starts here -->
  <div class="col-sm-12 services">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-4 col-xs-3 services-pictures">
        <img src="../media/tile.jpg" alt="services images will go here" id="services-img">
      </div>
      <div class="col-lg-8 col-md-6 col-sm-8 col-xs-9 services-text">
        <div class="title"><h1 class="heading">Our Services</h1></div>
        <p>At S&G tiling we provide different services which are as following but not limited to: <br>
            1-	General tiling (Floor and Wall) <br>
            2-	Screeding and Waterproofing <br>
            3-	Ceramic tiles <br>
            4-	Natural stone and Marbles  <br>
            5-	Teracotta and Slate <br>
            6-	Facy penny rounds and granite <br>
            For further information please visit our services page. </p>
      </div>
    </div>

  </div>
  
</div>
<br>
<!-- the main body finishes here -->

<!-- footer starts from here -->
<?php include dirname(__FILE__).'/includes/footer.php';?>
  </body>
</html>