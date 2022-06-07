     <!-- Page Files-->
     <?php   include("../inc/top.php"); 
   if(isset($_SESSION["msg"])){
     echo $_SESSION["msg"];
     unset($_SESSION["msg"]);
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
      <div class="card-body ">
        <div class="table-responsive">

        <?php

$sql="select * from contact order by id desc";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) {
    $i=mysqli_num_rows($result);
 
    
?>



          <table class="table mb-0 table-striped table-bordered table-hover text-capitalize text-center">
            <thead class="bg-dark text-white fw-bold">
              <tr>
                <th>Sr#</th>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject </th>
                <th>Message</th>
                
              </tr>
            </thead>


            
            <tbody>
                <?php    
                while($row=mysqli_fetch_array($result)){
                    ?>
              <tr>
                <th> <?php echo $i;   ?> </th> 
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["full_name"]; ?></td>
                <td><?php    echo $row["email"];         ?></td>
                <td><?php  echo $row["subject"];  ?></td>
                <td class="text-truncate w-150px" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo $row["message"];?>"><?php  echo $row["message"]; ?></td>
                
                
               
              </tr>
              <?php

$i--;

       }


  ?>  


              <?php
      }


  ?>  





            </tbody>
          </table>
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