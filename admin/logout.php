<?php

if(isset($_GET["action"]) && $_GET["action"]=="logout"){
    unset($_SESSION["isLoggedIn"]);
    header("location:index");

}

if(!isset($_SESSION["isLoggedIn"])){
    header("location:index");

}



?>