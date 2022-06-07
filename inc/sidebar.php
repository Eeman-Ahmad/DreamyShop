 <nav class="side-navbar z-index-40">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center py-4 px-3"><img class="avatar shadow-0 img-fluid rounded-circle" src="../assets/images/team_03.jpg" alt="...">
            <div class="ms-3 title">
              <h1 class="h4 mb-2">User </h1>
              <p class="text-sm text-gray-500 fw-light mb-0 lh-1">Profile</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="text-uppercase text-gray-400 text-xs letter-spacing-0 mx-3 px-2 heading">Main</span>
          <ul class="list-unstyled py-4">
            <li class="sidebar-item <?php if($pageName=="dashboard"){ echo "active";  } ?>"><a class="sidebar-link text-uppercase" href="dashboard"> 
              
            <i class="fas fa-tachometer-alt me-xl-2"></i>
                </svg>Home </a></li>

                
                <li class="sidebar-item <?php if($pageName=="categories" || $pageName=="manage-categories"){echo  "active";} ?>"><a class="sidebar-link text-uppercase" href="categories"> 
                <i class="fas fa-list me-xl-2"></i> 
                category </a></li> 

                
               

                  
                  <li class="sidebar-item  <?php if($pageName=="products"){ echo "active";  } ?>"><a class="sidebar-link text-uppercase" href="products"> 
                  <i class="fas fa-store me-xl-2">

                  </i>products </a></li>


                  <li class="sidebar-item <?php if($pageName=="contact"){echo  "active";} ?>"><a class="sidebar-link text-uppercase" href="contact"> 
                <i class="fas fa-address-book me-xl-2"></i> 
                
                contact </a></li> 
                  

                  

                  <li class="sidebar-item  <?php if($pageName=="admin"){ echo "active";  } ?>"><a class="sidebar-link text-uppercase" href="admin"> 
                  <i class="fas fa-users-cog me-xl-2 "></i>
                  Admin </a></li>
                    
                   
            
           
            <li class="sidebar-item active"><a class="sidebar-link text-uppercase" href=""> 
            <i class="fas fa-lock me-xl-2"></i>Logout </a></li>
         
        </nav>

   