<?php
  $pageName = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") +1);
?>

<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <a class="navbar-brand m-0">
      <div class="text-center">
        <a href="index.php">
        <img src="assets/img/bfp.png" style="margin-top: -90px;"  width="50% " class="">
      <p class = " text-break " style= "font-size: 18px;">Bureau of Fire Protection</p>
      </a>
      </div>
      </a>
    </div>
      </a>
    </div>
    <hr class="horizontal dark my-7 mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <!-- <li class="nav-item">
          <a class="nav-link  
          <?= $pageName == 'index.php' ? 'active' : '' ?> " href="index.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class = "fa fa-home text-dark text-lg"></i>
            </div>
            <span class="nav-link-text ms-1">Requests</span>
          </a>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link 
          <?= $pageName == 'inspection_order_data.php' ? 'active' : '' ?> " href="inspection_order_data.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class = "fa fa-user-alt text-dark text-lg"></i>
            </div>
            <span class="nav-link-text ms-1">Inspection Order</span>
          </a>
        </li> -->
      </ul>
    </div>
   
   
  </aside>