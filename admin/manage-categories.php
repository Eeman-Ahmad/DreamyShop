     <!-- Page Files-->
     <?php   include("../inc/top.php");
       include("../inc/getdata.php");

       $category_name="";
        
       $title="add";
       $msg_title="Inserted";

       if(isset($_GET["operation"]) && $_GET["operation"]=="edit") {
         if(isset($_GET["id"]) && $_GET["id"]!=""){
          $title="update";
          $msg_title="updated";
           $id=getSaveValue($conn,$_GET["id"]);
          $sql=mysqli_query($conn,"select * from $table where id='$id'");
         
           $row=mysqli_fetch_assoc($sql);
           $category_name=$row["category_name"];
         }else{
          header("location:categories");
        }
       }



       if(isset($_POST["submit"])){
         $category_name=getSaveValue($conn,$_POST["category_name"]);

        if(isset($_GET["id"]) && $_GET["id"]!=""){
          $sql="UPDATE $table SET `category_name`='$category_name' WHERE `id`='$id'";
          
        }else{
          $sql="INSERT INTO $table(`category_name`) VALUES('$category_name')";
        }
       
          $res=mysqli_query($conn,$sql);
          if($res){
            echo '<div class="position-absolute top-0 end-0 p-3" style="z-index: 1000">
              <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header border-bottom border-success border-2">
                  
                  <strong class="me-auto text-success">Success</strong>
                  
               
                </div>
                <div class="toast-body">
                  Data Successfully '.$msg_title.'
                </div>
              </div>
            </div>';
          }else{
            echo '<div class="position-absolute top-0 end-0 p-3" style="z-index: 1000">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
              <div class="toast-header border-bottom border-success border-2">
                
                <strong class="me-auto text-danger text-capitalize">ERROr</strong>
                
             
              </div>
              <div class="toast-body">
                Data Not.'.$msg_title.'
              </div>
            </div>
          </div>';
          }


       }
        ?>
 
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
           <div class="container my-3">
    <div class="card mb-0">
      <div class="card-body">

      

             <form action="" method="post" class="" enctype="multipart/form-data">
             <div class="row">

               <div class="col-lg-6 mb-3"><label for="category_name" class="text-capitalize h5"> category name<sup class="text-danger">*</sup> </label>
               
               <input type="text" class="form-control" name="category_name" id="category_name" placeholder="E.g. Shoes, caps, watches etc" value="<?php echo $category_name;?>">
  </div>
</div>
         <div class="col-lg-4 my-3">

           <button class="btn btn-primary" name="submit"> submit</button>
         </div>

             </form>

 
             
             </div>
             </div>
             </div>
             </div>
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