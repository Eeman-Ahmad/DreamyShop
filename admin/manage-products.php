     <!-- Page Files-->
<?php   include("../inc/top.php"); 
  include("../inc/getdata.php");
  $category_id="";
  $product_name="";
  $mrp="";
  $price="";
  $qty="";
  $image="";
  $link="";
  $rating="";
  $website="";
  $short_description="";
  $description="";

  $title="add";
  $msg_title="inserted";

  if(isset($_GET["operation"]) && $_GET["operation"]=="edit"){
    if(isset($_GET["id"]) && $_GET["id"]!=""){
      $id=getSaveValue($conn,$_GET["id"]);
      $sql=mysqli_query($conn,"SELECT * from $table where `id`=$id");
      $row=mysqli_fetch_assoc($sql);

      $title="update";
      $msg_title="updated";
    

      $category_id=$row["category_id"];
      $product_name=$row["product_name"];
      $mrp=$row["mrp"];
      $price=$row["price"];
      $qty=$row["qty"];
      $image=$row["image"];
      $link=$row["link"];
      $rating=$row["rating"];
      $website=$row["website"];
      $short_description=$row["short_description"];
      $description=$row["description"];
    }
  }
//   else{
//     header("location:products");
// }




  if(isset($_POST["submit"])){
    $category_id=getSaveValue($conn,$_POST["category_id"]);
    $product_name=getSaveValue($conn,$_POST["product_name"]);
    $mrp=getSaveValue($conn,$_POST["mrp"]);
    $price=getSaveValue($conn,$_POST["price"]);
    $qty=getSaveValue($conn,$_POST["qty"]);
    $link=getSaveValue($conn,$_POST["link"]);
    $rating=getSaveValue($conn,$_POST["rating"]);
    $website=getSaveValue($conn,$_POST["website"]);
    $short_description=getSaveValue($conn,$_POST["short_description"]);
    $description=getSaveValue($conn,$_POST["description"]);

    if(empty($_FILES["image"]["name"])){
      $image=getSaveValue($conn,$_POST["old_image"]);


    }else{
      $image=$_FILES["image"]["name"];
      $image=rand(11111,99999)."_".$image;
      $image_tmp=$_FILES["image"]["tmp_name"];
      move_uploaded_file($image_tmp,'../assets/product_img/'.$image);

    }

    if(isset($_GET["id"]) && $_GET["id"]!=""){
     $sql="UPDATE $table SET `category_id`='$category_id',`product_name`='$product_name',`mrp`='$mrp',`price`='$price',`qty`='$qty',`image`='$image',`rating`='$rating',`link`='$link',`website`='$website',`short_description`='$short_description',`description`='$description' WHERE `id`='$id'";

    }else{
      $sql="INSERT INTO $table (`category_id`,`product_name`,`price`,`mrp`,`qty`,`image`,`rating`,`link`,`website`,`description`,`short_description`,`status`) VALUES('$category_id','$product_name','$price','$mrp','$qty','$image','$rating','$link','$website','$description','$short_description','1')";
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
      Data Not '.$msg_title.'
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
          <form action="" method="POST"  class="row" enctype="multipart/form-data">


          <div class="col-lg-6 mb-3">

   <label for="category_id" class="text-capitalize h5">category:</label>
   <select name="category_id"  class="form-control" id="category_id" >

   <?php
   
  $getvalue=getvalue($conn,"categories");
  foreach ($getvalue as  $value) {
    

    echo '<option value="'.$value["id"].'">'.$value["category_name"].'</option>';
  }


?>
 
  
</select>


</div>

<div class="col-lg-6 mb-3">

    <label for="product_name" class="text-capitalize h5"> product name<sup class="text-danger">*</sup> </label>
    <input type="text" class="form-control" placeholder="E.g. Shoes" name="product_name" id="product_name" title="only letters" value="<?php echo $product_name;    ?>"> 
</div>

<div class="col-lg-6 mb-3">

    <label for="mrp" class="text-capitalize h5">  mrp </label>
    <input type="text" class="form-control" name="mrp" id="mrp" placeholder="10$" value="<?php echo $mrp;?>">


</div>

<div class="col-lg-6 mb-3">

    <label for="price" class="text-capitalize h5"> price </label>
    <input type="text" class="form-control" name="price" id="price" placeholder="5$" value="<?php echo $price;  ?>">


</div>


<div class="col-lg-12 mb-3">

    <label for="qty" class="text-capitalize h5"> Qty </label>
    <input type="text" class="form-control" name="qty" id="qty" value="<?php echo $qty;  ?>">


</div>




<div class="row">
<div class="col-lg-10 mb-3">

    <label for="image" class="text-capitalize h5"> image </label>
    <input type="file" accept="image/*" class="form-control" name="image" id="image">
    <input type="hidden" name="old_image" id="old_image" value="<?php echo $image; ?>">
</div>
<div class="col-lg-2 mb-3">
<img src="../assets/product_img/<?php echo $image;?>" class="img-fluid" alt="">
</div>
</div>


<div class="col-lg-6 mb-3">

    <label for="link" class="text-capitalize h5"> link</label>
    <input type="text" class="form-control" name="link" id="link" placeholder="http://www.website.com" value="<?php echo $link;?>">


</div>

<div class="col-lg-6 mb-3">

<label for="rating" class="text-capitalize h5">rating</label>
<select name="rating"  class="form-control" id="rating">
  <option value="1">1 Star</option>
  <option value="2">2 Stars</option>
  <option value="3">3 Stars</option>
  <option value="4">4 Stars</option>
  <option value="5">5 Stars</option>
 

</select>


</div>

<div class="col-lg-6 mb-3">
    <label for="website" class="text-capitalize h5"> website </label><textarea name="website" class="form-control" rows="5" placeholder="Amazon, alibaba" ><?php echo $website; ?></textarea>


</div>
<div class="col-lg-6 mb-3">
    <label for="short_description" class="text-capitalize h5"> short description</label>
    <textarea name="short_description" class="form-control" rows="5" placeholder="Enter text here..."><?php
    echo $short_description; ?></textarea>


</div>


<div class="col-12 mb-3">
    <label for="description" class="text-capitalize h5"> description </label>
    <textarea name="description" class="form-control" rows="5" placeholder="Enter text here..."><?php echo $description;?></textarea>


</div>






<div class="col-12 mt-5 ">
   <div class="row">

  
     <div class="col-lg-3 d-grid mb-2  ">
     <button class="btn  btn-primary " name="submit" > Submit</button> 
     </div>
  
     </div>
    


</div>


</form>
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