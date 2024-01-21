<?php
  $pageName = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") +1);
?>

<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <!-- <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li> -->
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">
            <h5>
            Nazareth Bureau of Fire Protection
            </h5>  
            <!-- <?= $pageName == 'index.php' ? 'Report' : 
            ($pageName == 'services.php' ? 'Services' : 
            ($pageName == 'edit_services.php' ? 'Edit Services': 
            ($pageName == 'users.php' ? 'Users Panel' : 
            ($pageName == 'inspection_order.php' ? 'Inspection Panel' : 
            ($pageName == 'inspector_panel.php' ? 'Inspector Panel' : 
            ($pageName == 'purpose_panel.php' ? 'Purpose Panel' : 
            ($pageName == 'duration_panel.php' ? 'Duration Panel' : 
            ($pageName == 'remarks_panel.php' ? 'Remarks Panel' : 
            ($pageName == 'setting.php' ? 'Settings' : 
            ($pageName == 'add_users.php' ? 'Add User' :
            ($pageName == 'edit_users.php' ? 'Edit User' : 
            ($pageName == 'confirmed_io.php' ? 'Confirmed Inspection Order' : 
            ($pageName == 'add_inspector.php'? 'Add Inspector Data' : 
            ($pageName == 'add_duration.php' ? 'Add Duration Data': 
            ($pageName == 'add_purpose.php' ? 'Add Purpose Data' : 
            ($pageName == 'add_remarks.php' ? 'Add Remarks Data' : 
            ($pageName == 'add_services.php' ? 'Add Services Data' : 
            ($pageName == 'add_users.php' ? 'Add Users' : 
            ($pageName == 'reports.php' ? 'Reports' : 
            ($pageName == 'confirm_inspection_data.php' ? 'Confirm Inspection Data' : ''
            ))))))))))))))))))))?> -->
            </li>
          </ol>
          <!-- <h6 class="font-weight-bolder mb-0"><?= $pageName == 'index.php' ? 'Reports' : ($pageName == 'services.php' ? 'Services' : ($pageName == 'users.php' ? 'Add Users' : ''))  ?></h6> -->
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <!-- <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
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
             
              <li class="nav-item dropdown pe-2 d-flex align-items-center mx-2">
              <!-- Bell Notif -->
              <a href="javascript:;" id = "notification"  class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
              <div style="height: 200px; overflow-y:scroll">
                      <?php 
                      $sql = "SELECT name, created_at FROM user WHERE role = 'Client' ORDER BY created_at desc";
                      $result = mysqli_query($conn, $sql);
                      // $row = mysqli_fetch_assoc($result);
                      if(mysqli_fetch_array($result)){
                        foreach($result as $row){

                          $time = strtotime($row['created_at']);
                          $display = Date(' g\h-i\m\i\n',$time);
                          ?>
                           <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                    <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New Client :</span> <?=$row['name'];?>
                        </h6>
                        <p class="text-xs text-secondary mb-0 ">
                          <i class="fa fa-clock me-1"></i>
                          <!-- 13 minutes ago -->
                          <?php 
                            echo $display;
                          ?>
                        
                          <!-- SET A TIME IF WHAT MIN THIS USERS IS CREATED AND MAKE A TIMEOUT FOR DISPLAYING LIKE 1 day or 4 hours -->
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                          <?php
                        }
                      }
                      else{
                        echo "No Notification!";
                      }
                      ?>
                      <!-- <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div> -->
                    
            </li>
                    </div>
          </ul>
          
        </div>
      </div>
    </nav>