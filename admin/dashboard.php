     <!-- Page Files-->
     <?php   include("../inc/top.php"); ?>
 
 <body>
     <div class="page">
       <!-- Main Navbar-->
       <header class="header z-index-50">
        <?php include("../inc/nav.php"); ?>
       </header>
       <!-- Main Navbar-->
 
 
       <div class="page-content d-flex align-items-stretch"> 
 
         <!-- Side Navbar -->
      <?php include("../inc/sidebar.php");?>
   <!-- Side Navbar -->
 
         <div class="content-inner w-100">
 
           <!-- Breadcrumb-->
           <?php include("../inc/breadcrumbs.php");?>
           <!-- Breadcrumb-->
          
 
           <!-- Page Content-->
           <section class="pb-0">
                    <div class="container-fluid">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="row gx-5 bg-white">
                                    <!-- Item -->
                                    <div class="col-xl-3 col-sm-6 py-4 border-lg-end border-gray-200">
                                        <div class="d-flex align-items-center">
                                            <div class="icon flex-shrink-0 bg-violet">
                                               
                                                <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                                                    <use xlink:href="#numbers-1"> </use>
                                                </svg>
                                            </div>
                                            <div class="mx-3">
                                                <h6 class="h4 fw-light text-gray-600 mb-3">Total<br>Categories</h6>
                                                <!-- <div class="progress" style="height: 4px">
                                                    <div class="progress-bar bg-violet" role="progressbar"
                                                        style="width: 25%; height: 4px;" aria-valuenow="25"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div> -->
                                            </div>
                                            <div class="number"><strong class="text-lg">

                                            <?php 
                                            $sql = "SELECT * FROM `categories`";
                                            $resCat = mysqli_query($conn, $sql);
                                            if(mysqli_num_rows($resCat)>0){
                                                $countCat = mysqli_num_rows($resCat);
                                                echo $countCat;
                                            }else{
                                                echo "0";
                                            }
                                            ?>
                                            </strong></div>
                                        </div>
                                    </div>
                                    <!-- Item -->
                                    <div class="col-xl-3 col-sm-6 py-4 border-lg-end border-gray-200">
                                        <div class="d-flex align-items-center">
                                            <div class="icon flex-shrink-0 bg-red">
                                                <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                                                    <use xlink:href="#survey-1"> </use>
                                                </svg>
                                            </div>
                                            <div class="mx-3">
                                                <h6 class="h4 fw-light text-gray-600 mb-3">Total<br>Products</h6>
                                                <!-- <div class="progress" style="height: 4px">
                                                    <div class="progress-bar bg-red" role="progressbar"
                                                        style="width: 70%; height: 4px;" aria-valuenow="70"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div> -->
                                            </div>
                                            <div class="number"><strong class="text-lg">

                                            <?php 
                                            $sql = "SELECT * FROM `products`";
                                            $resPr = mysqli_query($conn, $sql);
                                            if(mysqli_num_rows($resPr)>0){
                                                $countPr = mysqli_num_rows($resPr);
                                                echo $countPr;
                                            }else{
                                                echo "0";
                                            }
                                            ?>
                                            </strong></div>
                                        </div>
                                    </div>
                                    <!-- Item -->
                                    <div class="col-xl-3 col-sm-6 py-4 border-lg-end border-gray-200">
                                        <div class="d-flex align-items-center">
                                            <div class="icon flex-shrink-0 bg-green">
                                            <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                                                    <use xlink:href="#user-1"> </use>
                                                </svg>
                                            </div>
                                            <div class="mx-3">
                                                <h6 class="h4 fw-light text-gray-600 mb-3">Total<br>Admin</h6>
                                                <!-- <div class="progress" style="height: 4px">
                                                    <div class="progress-bar bg-green" role="progressbar"
                                                        style="width: 40%; height: 4px;" aria-valuenow="40"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div> -->
                                            </div>
                                            <div class="number"><strong class="text-lg">
                                            <?php 
                                            $sql = "SELECT * FROM `admin`";
                                            $resAd = mysqli_query($conn, $sql);
                                            if(mysqli_num_rows($resAd)>0){
                                                $countAd = mysqli_num_rows($resAd);
                                                echo $countAd;
                                            }else{
                                                echo "0";
                                            }
                                            ?>
                                            </strong></div>
                                        </div>
                                    </div>
                                    <!-- Item -->
                                    <div class="col-xl-3 col-sm-6 py-4">
                                        <div class="d-flex align-items-center">
                                            <div class="icon flex-shrink-0 bg-orange">
                                                <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                                                    <use xlink:href="#list-details-1"> </use>
                                                </svg>
                                            </div>
                                            <div class="mx-3">
                                                <h6 class="h4 fw-light text-gray-600 mb-3">Total<br>Messages</h6>
                                                <!-- <div class="progress" style="height: 4px">
                                                    <div class="progress-bar bg-orange" role="progressbar"
                                                        style="width: 50%; height: 4px;" aria-valuenow="50"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div> -->
                                            </div>
                                            <div class="number"><strong class="text-lg">
                                            <?php 
                                            $sql = "SELECT * FROM `contact`";
                                            $resCon = mysqli_query($conn, $sql);
                                            if(mysqli_num_rows($resCon)>0){
                                                $countCon = mysqli_num_rows($resCon);
                                                echo $countCon;
                                            }else{
                                                echo "0";
                                            }
                                            ?>
                                            </strong></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Dashboard Header Section    -->
                <section class="pb-0">
                    <div class="container-fluid">
                        <div class="row">
                           

                            <a href="categories" class="col-lg-3 mb-3 px-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="icon flex-shrink-0 bg-violet"><i class="fas fa-list"></i></div>
                                            <div class="ms-3"><strong
                                                    class="text-lg d-block lh-1 mb-1">Categories</strong><small
                                                    class="text-uppercase text-gray-500 small d-block lh-1">Click to go</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="products" class="col-lg-3 mb-3 px-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="icon flex-shrink-0 bg-red"><i class="fas fa-store"></i>
                                            </div>
                                            <div class="ms-3"><strong
                                                    class="text-lg d-block lh-1 mb-1">Products</strong><small
                                                    class="text-uppercase text-gray-500 small d-block lh-1">Click to go</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="admin" class="col-lg-3 mb-3 px-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="icon flex-shrink-0 bg-green"><i class="fas fa-users-cog"></i>
                                            </div>
                                            <div class="ms-3"><strong
                                                    class="text-lg d-block lh-1 mb-1">Admin</strong><small
                                                    class="text-uppercase text-gray-500 small d-block lh-1">Click to go</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="contact" class="col-lg-3 mb-3 px-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="icon flex-shrink-0 bg-orange"><i class="fas fa-users-cog"></i>
                                            </div>
                                            <div class="ms-3"><strong
                                                    class="text-lg d-block lh-1 mb-1">Messages</strong><small
                                                    class="text-uppercase text-gray-500 small d-block lh-1">Click to go</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </section>

       <!-- Page Content-->
        
           <!-- Page Footer-->
         <?php include("../inc/footer.php"); ?>
                 <!-- Page Footer-->
         </div>
       </div>
     </div>
     <!-- JavaScript files-->
    <?php include("../inc/bottom.php");?>
    <!-- JavaScript files-->
