<?php
require_once("inc/front-top.php");
include("inc/tables.php");
include("inc/functions.php");

?>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
  <?php 

require_once("inc/front-nav.php");

?>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Flash Deals</h4>
            <h2>Get your best products</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2>New Arrivals on Sale</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Find the Best Price</h4>
            <h2>Purchase on least Prices</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="products">view all products <i class="fa fa-angle-right"></i></a>
            </div>
          </div>


<?php 

$getdata=getdata($conn,"","","id","desc", "");
foreach ($getdata as $value) {
    
?>
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="assets/product_img/<?php echo $value["image"];?>" alt=""></a>
              <div class="down-content">
                <a href="#"><h4><?php echo $value["product_name"]; ?></h4></a>
                <h6><?php  echo $value["price"]; ?></h6>
                <p ><?php  echo $value["short_description"]; ?></p>
                 <?php
              $star = '<li class="list-inline-item m-0"><i class="fa fa-star small text-warning"></i></li>';
              if($value["rating"]==1){
                echo str_repeat($star,1);
              }elseif ($value["rating"]==2) {
                echo str_repeat($star,2);
              }elseif ($value["rating"]==3) {
                echo str_repeat($star,3);
              }elseif ($value["rating"]==4) {
                echo str_repeat($star,4);
              }elseif ($value["rating"]==5) {
                echo str_repeat($star,5);
              }else{
                echo str_repeat($star,1);
              }
              ?>
              <span>Compare With <a href="<?php echo $value["link"]?>" class="font-weight-bold" target="_blank"><?php echo ucwords($value["website"]);?></a></span>
             
              </div>
            </div>
          </div>
          <?php
                    }
  
                    ?>
        
        </div>
      </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Dreamy Shop</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Looking for the best products?</h4>
              <p> In order to make the best decision, it’s good to have all the facts at your fingertips. We are one of the world’s best price and product comparison services, with one single goal – to guide consumers to smarter buying decisions.</p>
              <ul class="featured-list">
                <li><a href="#">Money Saving</a></li>
                <li><a href="#">Convenient</a></li>
                <li><a href="#">Wide Choice</a></li>
                <li><a href="#">Smooth Buying process</a></li>
                <li><a href="#">Quick & Easy</a></li>
              </ul>
              <a href="about" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/feature-image.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Creative &amp; Unique <em>Dreamy</em> Products</h4>
                  <p>Looks so Good on the Outside, It'll Make You Feel Good Inside.</p>
                </div>
                <div class="col-md-4">
                  <a href="products" class="filled-button">Purchase Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
<?php

require("inc/front-footer.php");

?>
<?php

require("inc/front-bottom.php");

?>


   