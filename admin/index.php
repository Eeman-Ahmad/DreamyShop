<?php

include("../inc/top.php");
if(isset($_SESSION["isLoggedIn"])){
  header("location:dashboard");
}

if(isset($_POST["login"])){

  $email=getSaveValue($conn,$_POST["email"]);
  $Password=getSaveValue($conn,$_POST["Password"]);

  $res= mysqli_query($conn,"SELECT * from `admin` WHERE `email`='$email' AND BINARY `password`='$Password' AND `status`='1'");
  
  if(mysqli_num_rows($res)>0){
    $row=mysqli_fetch_array($res);   
    
    
    $_SESSION["isLoggedIn"]=true;

    $_SESSION["ADMIN_email"]=$row["email"];
    $_SESSION["ADMIN_PASSWORD"]=$row["Password"];
    $_SESSION["ADMIN_ROLE"]=$row["role"];
    $_SESSION["ADMIN_IMAGE"]=$row["image"];
    $_SESSION["ADMIN_STATUS"]=$row["status"];
    $_SESSION["ADMIN_ID"]=$row["id"];
    header("location:dashboard");

  }else{
echo '<div class="position-absolute top-0 end-0 p-3" style="z-index: 1000">
<div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header border-bottom border-success border-2">
    
    <strong class="me-auto text-success">Success</strong>
    
 
  </div>
  <div class="toast-body">
   invalid email or password
  </div>
</div>
</div>';
  }
 

}



?>
  <body>
    <div class="login-page">
      <div class="container d-flex align-items-center position-relative py-5">
        <div class="card shadow-sm w-100 rounded overflow-hidden bg-none">
          <div class="card-body p-0">
            <div class="row gx-0 align-items-stretch">
              <!-- Logo & Information Panel-->
              <div class="col-lg-6">
                <div class="info d-flex justify-content-center flex-column p-4 h-100">
                  <div class="py-5">
                    <h1 class="display-6 fw-bold text-center">Login form</h1>
                    
                  </div>
                </div>
              </div>
              <!-- Form Panel    -->
              <div class="col-lg-6 bg-white">
                <div class="d-flex align-items-center px-4 px-lg-5 h-100">
                  <form class=" py-5 w-100" method="post" enctype="multipart/form-data" action="">
                    <div class="input-material-group mb-3">
                      <input class="input-material" id="email" type="email" name="email" autocomplete="off" required data-validate-field="loginUsername">
                      <label class="label-material" for="username">Email</label>
                    </div>
                    <div class="input-material-group mb-4">
                      <input class="input-material" id="password" type="password" name="Password" required data-validate-field="loginPassword">
                      <label class="label-material" for="password">Password</label>
                    </div>
                    <button class="btn btn-primary mb-3" id="login" name="login" type="submit">Login</button>
                    <br>
                    <small class="text-gray-500">Do not have an account? </small><a class="text-sm text-paleBlue" href="register">Signup</a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center position-absolute bottom-0 start-0 w-100 z-index-20">
        <p class="text-white">Design by Team
        </p>
      </div>
    </div>
    <!-- JavaScript files-->
  <?php

 include("../inc/bottom.php");

?>