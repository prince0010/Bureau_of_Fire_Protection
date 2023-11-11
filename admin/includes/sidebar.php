<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <a class="navbar-brand m-0">
        <h4 class = "text-center text-break" > <?= webSetting('web_name') ?></h4>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link  active" href="index.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class = "fa fa-home text-dark text-lg"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Enquiries</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="enquiries.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class = "fa fa-bullhorn text-dark text-lg"></i>
            </div>
            <span class="nav-link-text ms-1">Enquiries</span>
          </a>
        </li>
     
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Manage Services</h6>
        </li>
        <li class="nav-item">
            <a class="nav-link  " href="services.php">
                <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class = "fa fa-cogs text-dark text-lg"></i>
                </div>
                <span class="nav-link-text ms-1">Services</span>
            </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link  " href="users.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class = "fa fa-user-plus text-dark text-lg"></i>
            </div>
            <span class="nav-link-text ms-1">Admin/User</span>
          </a>
        </li>

          
        <li class="nav-item">
          <a class="nav-link  " href="inspection_order.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class = "fa fa-user-alt text-dark text-lg"></i>
            </div>
            <span class="nav-link-text ms-1">Inspectors Data</span>
          </a>
        </li>
                   
        <li class="nav-item">
          <a class="nav-link  " href="inspector_panel.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class = "fa fa-map-marker text-dark text-lg"></i>
            </div>
            <span class="nav-link-text ms-1">Inspector Name</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link  " href="purpose_panel.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class = "fa fa-map-marker text-dark text-lg"></i>
            </div>
            <span class="nav-link-text ms-1">Purpose</span>
          </a>
        </li>
     
        <li class="nav-item">
          <a class="nav-link" href="duration_panel.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class = "fa far fa-clock	 text-dark text-lg"></i>
            </div>
            <span class="nav-link-text ms-1">Duration</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="remarks_panel.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class = "fa far fa-comment	 text-dark text-lg"></i>
            </div>
            <span class="nav-link-text ms-1">Remarks</span>
          </a>
        </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Setting</h6>
        </li>
          

        <li class="nav-item">
          <a class="nav-link  " href="setting.php">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class = "fa fa-globe text-dark text-lg"></i>
            </div>
            <span class="nav-link-text ms-1">Setting</span>
          </a>
        </li>
       
      </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
      <a class="btn text-white bg-dark mt-3 w-100" href = "logout.php"> Logout </a>
    </div>
   
  </aside>