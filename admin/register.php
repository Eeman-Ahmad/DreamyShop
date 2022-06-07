<?php

include ("../inc/top.php");

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
                    <h1 class="display-6 fw-bold text-capitalize">register yourself</h1>
                    
                  </div>
                </div>
              </div>
              <!-- Form Panel    -->
              <div class="col-lg-6 bg-white">
                <div class="d-flex align-items-center px-4 px-lg-5 h-100">
                  <form class="register-form py-5 w-100" method="get" action="login.html">
                    <div class="input-material-group mb-3">
                      <input class="input-material" type="text" name="registerUsername" required data-validate-field="registerUsername">
                      <label class="label-material" for="register-username">Username</label>
                    </div>
                    <div class="input-material-group mb-3">
                      <input class="input-material" type="email" name="registerEmail" required data-validate-field="registerEmail">
                      <label class="label-material">Email Address</label>
                    </div>
                    <div class="input-material-group mb-4">
                      <input class="input-material" type="password" name="registerPassword" required data-validate-field="registerPassword">
                      <label class="label-material">Password</label>
                    </div>
                   
                    <button class="btn btn-primary mb-3" id="login" type="submit">Register</button><br><small class="text-gray-500">Already have an account?  </small><a class="text-sm text-paleBlue" href="index">Login</a>
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

include ("../inc/bottom.php");

?>