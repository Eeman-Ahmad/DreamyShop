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
  <div class="page-heading products-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4>new arrivals</h4>
            <h2>Dreamy products</h2>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="filters">
            <ul>
              <li class="active" data-filter="*">All Products</li>
              <?php
         
              $resCat = mysqli_query($conn,"SELECT * FROM `categories` order by `category_name` ASC");;
              if(mysqli_num_rows($resCat)> 0){
                while($rowCat = mysqli_fetch_array($resCat)){
                  $catName = $rowCat["category_name"];
                  $catId = $rowCat["id"];
                  ?>
                    <li data-filter=".<?php echo $catId;?>"><?php echo $catName?></li>
                  <?php

                }
              }
              ?>

        
            </ul>
          </div>
        </div>
        <div class="col-md-12">
          <div class="filters-content">
            <div class="row grid">
              <?php

              $getdata = getdata($conn, "", "", "id", "desc", "");
              foreach ($getdata as $value) {

              ?>
                     
                <div class="col-lg-4 col-md-4 all <?php echo $value["category_id"];?>">
                  <div class="product-item">
                    <a href="#"><img src="assets/product_img/<?php echo $value["image"]; ?>" alt=""></a>
                    <div class="down-content">
                      <a href="#">
                        <h4><?php echo $value["product_name"];?></h4>
                      </a>
                      <h6><?php echo $value["price"]; ?></h6>
                      <p><?php echo $value["short_description"]; ?></p>
                      <?php
                      $star = '<li class="list-inline-item m-0"><i class="fa fa-star small text-warning"></i></li>';
                      if ($value["rating"] == 1) {
                        echo str_repeat($star, 1);
                      } elseif ($value["rating"] == 2) {
                        echo str_repeat($star, 2);
                      } elseif ($value["rating"] == 3) {
                        echo str_repeat($star, 3);
                      } elseif ($value["rating"] == 4) {
                        echo str_repeat($star, 4);
                      } elseif ($value["rating"] == 5) {
                        echo str_repeat($star, 5);
                      } else {
                        echo str_repeat($star, 1);
                      }
                      ?>
 <span>Shop Now   <a href="<?php echo $value["link"]?>" class="font-weight-bold" target="_blank"><?php echo ucwords($value["website"]);?></a></span>
                    </div>
                  </div>
                </div>
              <?php
              }

              ?>

            </div>
          </div>
        </div>
        <!-- <div class="col-md-12">
          <ul class="pages">
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
          </ul>
        </div> -->
      </div>
    </div>
  </div>


  <?php

  require("inc/front-footer.php");

  ?>


  <?php

  require("inc/front-bottom.php");

  ?>