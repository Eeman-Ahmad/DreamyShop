<?php

$table="";

if($pageName=="products" || $pageName=="manage-products"){
    $table="products";
}

if($pageName=="categories" || $pageName=="manage-categories"){

    $table="categories";
}
if($pageName=="admin" || $pageName=="manage-admin"){

    $table="admin";
}
if($pageName=="index" || $pageName=="logout"){

    $table="login";
}




?>