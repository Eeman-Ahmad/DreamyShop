     <!-- Page Files-->
     <?php   include("../inc/top.php"); 
     if(isset($_SESSION["msg"])){
         echo $_SESSION["msg"];
         unset($_SESSION["msg"]);
     }
  require_once("../inc/getdata.php");
  $name="";
  $email="";
  $password="";
  $image="";
  
  $title="add";
  $msg_title="Inserted";

  if(isset($_GET["operation"]) && $_GET["operation"]=="edit"){
    if(isset($_GET["id"]) && $_GET["id"]!=""){
      $id=getSaveValue($conn,$_GET["id"]);
      $sql=mysqli_query($conn,"SELECT * from $table where `id`=$id");
      $row=mysqli_fetch_assoc($sql);

      $title="update";
      $msg_title="updated";
    

      $name=$row["name"];
      $email=$row["email"];
      $password=$row["password"];
      $image=$row["image"];
    }
  }
//   else{
//     header("location:products");
// }




  if(isset($_POST["submit"])){
    $name=getSaveValue($conn,$_POST["name"]);
    $email=getSaveValue($conn,$_POST["email"]);
    $password=getSaveValue($conn,$_POST["password"]);
    if(empty($_FILES["image"]["name"])){
      $image=getSaveValue($conn,$_POST["old_image"]);
    }else{
      $image=$_FILES["image"]["name"];
      $image=rand(11111,99999)."_".$image;
      $image_tmp=$_FILES["image"]["tmp_name"];
      move_uploaded_file($image_tmp,'../assets/admin_img/'.$image);

    }

    if(isset($_GET["id"]) && $_GET["id"]!=""){
     $sql="UPDATE $table SET `name`='$name',`email`='$email',`password`='$password',`image`='$image' WHERE `id`='$id'";

    }else{
     
        $sql="INSERT INTO $table (`name`,`email`,`password`,`role`,`image`,`status`)VALUES('$name','$email','$password','1','$image','1')";
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

   <label for="name" class="text-capitalize h5">name</label>
   <input type="text" class="form-control" placeholder="E.g. Mikki" name="name" id="name" title="only letters" value="<?php echo $name;  ?>"> 

</div>

<div class="col-lg-6 mb-3">

    <label for="email" class="text-capitalize h5">email </label>
    <input type="email" class="form-control" placeholder="E.g. mail@gmail.com" name="email" id="email"
    value="<?php echo $email;  ?>">
</div>
<div class="row">

    <div class="col-lg-6 mb-3">
    
        <label for="password" class="text-capitalize h5">  password </label>
        <input type="password" class="form-control" name="password" id="password"
        value="<?php echo $password;  ?>">
    
    
    </div>

    <div class="col-lg-4 mb-3">

    <label for="image" class="text-capitalize h5"> image </label>
    <input type="file" accept="image/*" class="form-control" name="image" id="image">
    <input type="hidden" name="old_image" id="old_image" value="<?php echo $image;   ?>">
</div>
<div class="col-lg-2 mb-3">
<img src="../assets/admin_img/<?php echo $image;?>" class="img-fluid" alt="">
</div>


</div>


<div class="col-lg-6 mb-3">

<label for="role" class="text-capitalize h5">role</label>
<select name="role"  class="form-control" id="role">
  <option value="0">editor</option>
  <option value="1">admin</option>
 
</select>


</div>

<div class="col-12 mt-5 ">
   <div class="row">

  
     <div class="col-lg-3 d-grid mb-2">
     <button class="btn btn-primary" name="submit" >Submit</button> 
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