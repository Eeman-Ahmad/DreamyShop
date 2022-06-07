     <!-- Page Files-->
     <?php   include("../inc/top.php"); 
   if(isset($_SESSION["msg"])){
     echo $_SESSION["msg"];
     unset($_SESSION["msg"]);
   }
       include("../inc/getdata.php");
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

$i=1;
$count=count($data);
if($count>0){

?>


          <table class="table mb-0 table-striped table-bordered table-hover text-capitalize text-center">
            <thead class="bg-dark text-white fw-bold">
              <tr>
                <th>Sr#</th>
                <th>id</th>
                <th>category</th>
                <th>product_name</th>
                <th>price </th>
                <th>mrp</th>
                <th>qty</th>
                
                <th>image</th>
                <th>rating</th>
                <th>link</th>
                <th>website</th>
                <th>description</th>
                <th>short_description</th>
                <th>Status</th>
                <th>Added on</th>
                <th>action</th>
              </tr>
            </thead>
<?php

foreach ($data as  $value) {

?>

            
            <tbody>
              <tr>
                <th> <?php echo $i;   ?> </th> 
                <td><?php echo $value["id"]; ?></td>
                <td><?php echo $value["category_id"]; ?></td>
                <td><?php    echo $value["product_name"];         ?></td>
                <td><?php  echo $value["price"];  ?></td>
                <td><?php echo $value["mrp"];   ?></td>
                <td><?php  echo $value["qty"];  ?></td>
                
                <td>  <img src="../assets/product_img/<?php echo $value["image"];?>" height="60px" width="60px" alt="">  </td>
                <td><?php echo $value["rating"]; ?></td>
                <td class="text-truncate w-150px" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo $value["link"];?>"> <?php  echo $value["link"]; ?> </td>
                <td> <?php  echo $value["website"];  ?>  </td>
                <td class="text-truncate w-150px" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo $value["description"];?>"><?php  echo $value["description"]; ?></td>
                <td class="text-truncate w-150px" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo $value["short_description"];?>"> <?php  echo $value["short_description"]; ?> </td>
                <td>  
                  <?php
        if($value["status"]==1){
          echo '<a href="?id='.$value["id"].'&status=deactivated" class="btn btn-sm btn-success"  data-bs-toggle="tooltip" data-bs-placement="left" title="Click to deactive">Active</a>';
        }else{
          echo '<a href="?id='.$value["id"].'&status=activate" class="btn btn-sm btn-warning"  data-bs-toggle="tooltip" data-bs-placement="left" title="Click to active"> Deactive</a>';
        }

?>
</td>
          <td data-bs-toggle="tooltip" data-bs-placement="left" title="<?php echo $value["added_on"];?>">
               <?php  echo date('D-m-y',strtotime($value["added_on"])  )?> </td>
                <td>
                <a href="manage-products?operation=edit&id=<?php echo $value["id"];?>" class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-bs-placement="left" title="Click to Edit" ><span class="fas fa-pen"></span> </a>

                 <a href="products?operation=delete&id=<?php echo $value["id"];?>"  class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="left" title="Click to Delete" ><span class="fas fa-trash"></span> </a> 
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