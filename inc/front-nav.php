
<style>
  .active{
    color: #F33F3F;
  }
</style>
<header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index"><h2>The<em> Dreamy</em> <em>Shop</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item ">
                <a class="nav-link<?php  if($pageName=="index"){echo "active";}else{

                }?>" href="index">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link<?php  if($pageName=="products"){echo "active";}else{

}?>" href="products">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link<?php  if($pageName=="about"){echo "active";}else{

}?>" href="about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link<?php  if($pageName=="contact"){echo "active";}else{

}?>" href="contact">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>