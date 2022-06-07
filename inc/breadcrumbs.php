<header class="bg-white shadow-sm px-4 py-3 z-index-20">
            <div class="container-fluid d-flex justify-content-between px-0">
              <h2 class="mb-0 p-1"><?php  echo ucwords(str_replace("-"," ",$pageName)); ?></h2>
              <?php
             if($pageName=="categories" || $pageName=="products" || $pageName=="admin"){
             echo '<a href="manage-'.$pageName.'" class="btn btn-primary ">add new</a>';
             }

?>
           
            </div>
          </header>