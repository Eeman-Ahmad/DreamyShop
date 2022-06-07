<?php

include("tables.php");
/*
=======================================
DELETE DATA
=======================================
*/

$del_title="Deleted";

if(isset($_GET["operation"]) && $_GET["operation"]=="delete"){
  
  if(isset($_GET["id"]) && $_GET["id"]!=""){

   $id_del=getSaveValue($conn,$_GET["id"]);
   $res=mysqli_query($conn,"DELETE FROM $table WHERE `id`='$id_del'");
   if($res){
     $_SESSION["msg"] = '<div class="position-absolute top-0 end-0 p-3" style="z-index: 1000">
     <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
       <div class="toast-header border-bottom border-success border-2">
         
         <strong class="me-auto text-success">'.$status_title.'</strong>
         
      
       </div>
       <div class="toast-body">
         Data Successfully '.$del_title.'
       </div>
     </div>
   </div>';
 
   }else{
     $_SESSION["msg"] = '<div class="position-absolute top-0 end-0 p-3" style="z-index: 1000">
     <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
       <div class="toast-header border-bottom border-success border-2">
         
         <strong class="me-auto text-danger text-capitalize">Error</strong>
         
      
       </div>
       <div class="toast-body">
         Status Not Updated.
       </div>
     </div>
   </div>';
  }
  header("location:".$pageName);
 }
}

/*
=======================================
DELETE DATA
=======================================
*/




/*
=======================================
STATUS ACTIVATION
=======================================
*/

$status="";
$status_title  = "";
if(isset($_GET["id"]) && $_GET["id"]!=""){
    $id=getSaveValue($conn,$_GET["id"]);
    
    if(isset($_GET["status"]) && $_GET["status"]!=""){

      if($_GET["status"]=="deactivated"){
        $status=0;
        $status_title  = "Deactivated";
      }
      if($_GET["status"]=="activate"){
        $status=1;
        $status_title  = "Activated";
      }
  $sql_status_update= mysqli_query($conn,"UPDATE $table SET `status`='$status' WHERE `id`='$id'");
      if($sql_status_update){
        $_SESSION["msg"] = '<div class="position-absolute top-0 end-0 p-3" style="z-index: 1000">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header border-bottom border-success border-2">
            
            <strong class="me-auto text-success">'.$status_title.'</strong>
            
         
          </div>
          <div class="toast-body">
            Status Successfully '.$status_title.'
          </div>
        </div>
      </div>';
    
      }else{
        $_SESSION["msg"] = '<div class="position-absolute top-0 end-0 p-3" style="z-index: 1000">
        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header border-bottom border-success border-2">
            
            <strong class="me-auto text-danger text-capitalize">Error</strong>
            
         
          </div>
          <div class="toast-body">
            Status Not Updated.
          </div>
        </div>
      </div>';
      }
      header("location:".$pageName);
    }
  }
/*
=======================================
DATA DISPLAY
=======================================
*/


/*
=======================================
ROLE
=======================================
*/
$role="";
$role_title="";
if(isset($_GET["id"]) && $_GET["id"]!=""){
  $id=getSaveValue($conn,$_GET["id"]);

  if(isset($_GET["role"]) && $_GET["role"]!=""){

    if($_GET["role"]=="editor"){
      $role=0;
      $role_title="editor";
    }
    if($_GET["role"]=="admin"){
      $role=1;
      $role_title="admin";
    }

    $sql_role_update=mysqli_query($conn,"UPDATE $table SET `role`='$role' WHERE `id`='$id'");
    if($sql_role_update){
      $_SESSION["msg"] = '<div class="position-absolute top-0 end-0 p-3" style="z-index: 1000">
      <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header border-bottom border-success border-2">
          
          <strong class="me-auto text-success"> Success</strong>
          
       
        </div>
        <div class="toast-body">
          Status Successfully '.$role_title.'
        </div>
      </div>
    </div>';
    }else{
      $_SESSION["msg"] = '<div class="position-absolute top-0 end-0 p-3" style="z-index: 1000">
      <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header border-bottom border-success border-2">
          
          <strong class="me-auto text-danger text-capitalize">Error</strong>
          
       
        </div>
        <div class="toast-body">
          Status Not Updated.
        </div>
      </div>
    </div>';
    }
    header("location:".$pageName);
  }
}


/*
=======================================
 ROLE
=======================================
*/



if($pageName!="" || $pageName!="index" || $pageName!="dashboard" ){
$data=array();
    $sql=mysqli_query($conn,"Select * from $table order by id desc");
    if(mysqli_num_rows($sql)>0){
        while($row=mysqli_fetch_assoc($sql)){
            $data[]=$row;
        }
        return $data;
    }
   
  
}
else{
    header("location:404");
}




?>