     <!-- Page Files-->
<?php   include("../inc/top.php"); 

if(isset($_SESSION["msg"])){
  echo $_SESSION["msg"];
  unset($_SESSION["msg"]);
}
  require_once("../inc/getdata.php");

 

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
        <div class="table-responsive">
<?php 
$i = 1;
 $count = count($data);
 if($count>0){

?>
          <table class="table mb-0 table-striped table-bordered table-hover text-capitalize text-center">
            <thead class="bg-dark text-white fw-bold">
              <tr>
                <th>Sr#</th>
                <th>id</th>
                <th>Categories</th>
                <th>Status</th>
                <th>Added on</th>
                <th>action</th>
              </tr>
            </thead>
            <tbody >
<?php

foreach ($data as $value) {
?>
<tr>
                <th><?php echo $i;  ?>  </th>
                <td data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo $value["id"];?>">
                <?php echo $value["id"]; ?></td>

                <td data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo $value["category_name"];?>"> <?php  echo $value["category_name"]; ?></td>


                <td>
                  <?php  
                           if($value["status"]==1){
                             
                             echo '<a href="?id='.$value["id"].'&status=deactivated" class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-bs-placement="left" title="Click to deactive"> Active </a>';
                            }else{
                              echo '<a href="?id='.$value["id"].'&status=activate" class="btn btn-sm btn-warning" data-bs-toggle="tooltip" data-bs-placement="left" title="Click to active"> Deactive </a>';
                            }          
                             ?>
                             </td>


            <td data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo $value["added_on"];?>">
             <?php echo date('D-m-y',strtotime($value["added_on"]) )?></td> 
            
            
            <td>

                <a href="manage-categories?operation=edit&id=<?php echo $value["id"]?>" class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-bs-placement="left" title="Click to Edit" ><span class="fas fa-pen"></span> </a>

                <a href="categories?operation=delete&id=<?php echo $value["id"];?>" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="left" title="Click to Delete" ><span class="fas fa-trash"></span> </a> 


                </td>
              </tr>
<?php
$i++;
}
 }else{
echo '<div class="alert alert-danger bg-gradient">
No Data Found.
</div>';
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