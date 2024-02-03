<?php
  $pageName = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") +1);
?>

<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <a class="navbar-brand m-0">
      <div class="text-center">
        <a href="index.php">
        <img src="assets/img/apple-icon.png" style="margin-top: -90px;" width="50% " class="">
      <p class = " text-break " style= "font-size: 18px;">Nazareth Bureau of Fire Protection</p>
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
            <span class="nav-link-text ms-1">IOD</span>
          </a>
        </li> -->

        <!-- <li class="nav-item">
          <a class="nav-link  
          <?= $pageName == 'set_scheduled.php' ? 'active' : '' ?> " href="set_scheduled.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class = "fa fa-clock text-dark text-lg"></i>
            </div>
            <span class="nav-link-text ms-1">Scheduled</span>
          </a>
        </li>
      </ul>
    </div> -->
    <!-- <div class="sidenav-footer mx-3 ">
      <a class="btn text-white bg-dark mt-3 w-100" href = "logout.php"> Logout </a>
    </div>
    -->
  </aside>