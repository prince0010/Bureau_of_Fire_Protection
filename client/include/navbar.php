<?php
  $pageName = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") +1);
?>

<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
       
          </ol>
          <h6 class="font-weight-bolder mb-0"><h4>Nazareth Bureau of Fire Protection</h4></li></h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <!-- <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeoholder="Type here...">
            </div> -->
          </div>
          <ul class="navbar-nav  justify-content-end">
            <!-- <li class="nav-item d-flex align-items-center">
              <a class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank" href="https://www.creative-tim.com/builder?ref=navbar-soft-ui-dashboard">Online Builder</a>
            </li> -->
            <li class="nav-item dropdown pe-2 d-flex align-items-center mx-2">
            <a href="javascript:;" class="nav-link text-body p-0 font-weight-bold" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Hello <?= $_SESSION['loggedInUser']['name']; ?></span>
              </a>
              <ul class="dropdown-menu dropdown-menu-end py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item border-radius-md" href="javascript:;">
              <a class="btn text-white bg-dark w-80" style="margin-left: 20px;" href = "../admin/logout.php"> Logout </a>
                    <div class="d-flex py-1">
                    <div class="d-flex flex-column justify-content-center">
                    <div class="sidenav-footer mx-3 ">
          
        </div>
          </div>
                  </a>
            </div>
              </ul>
            </li>
        </div>
      </div>
    </nav>