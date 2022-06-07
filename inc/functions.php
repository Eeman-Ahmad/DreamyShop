<?php

function getSaveValue($conn,$str){

    $str=mysqli_real_escape_string($conn,$str); //prevent hacking
    $str=htmlentities($str);
    return $str;
}

function getvalue($conn,$table=""){

    $data=array();
    $sql=mysqli_query($conn,"Select * from $table order by id desc");
    if(mysqli_num_rows($sql)>0){
        while($row=mysqli_fetch_assoc($sql)){
            $data[]=$row;
        }
        return $data;
    }
}

function getdata($conn,$product_id="",$category_id="",$order_by="",$order_status="", $search=""){
$sql=" select * from products where `status`='1' ";
if($product_id!=""){
    $sql .=" AND `id`='$product_id' ";
}
if($category_id!=""){
    $sql .=" AND `category_id`='$category_id' ";
}
// if($search!=""){
// $sql .=" AND `product_name` LIKE '%$search%' OR `price` LIKE '%$search%' OR `description` LIKE '%$search%' ";  
// }
// else{
//     $sql .= "";
// }
if($order_status!=""){

    $sql .= " order by $order_by $order_status ";
}


//  echo $sql;
//  die();


    $res=mysqli_query($conn,$sql);
    $res_Arr=array();
    if(mysqli_num_rows($res)>0){
        while($row=mysqli_fetch_array($res)){

          $res_Arr[]=$row;
        }
           
      
    }
      return $res_Arr;
    
}
function checkAvailableProductQty($conn, $pid){
    $res = mysqli_query($conn, "SELECT `product_qty`, SUM(`product_qty`) as qty FROM `orders` WHERE `product_id`='$pid' AND `order_status`!=5");
    if(mysqli_num_rows($res)>0){
        $row = mysqli_fetch_array($res);
        return $row["qty"]; 
           }else{
            return "0";
           }
}
function checkProductQty($conn, $pid){
    $res = mysqli_query($conn, "SELECT `qty` FROM `products` WHERE `id`='$pid'");
    if(mysqli_num_rows($res)>0){
        $row = mysqli_fetch_array($res);
        return $row["qty"]; 
           }else{
            return "0";
           }
}


// function getRelativeProducts($conn,$category_id){
//     $sql="SELECT * FROM `products` WHERE `category_id`='$category_id'";
//     $res_cat=mysqli_query($conn,$sql);
//     if(mysqli_num_rows($res_cat)>0){
//       while($row_cat=mysqli_fetch_array($res_cat)){
        
   
//     }
// }
//     }
        ?>

