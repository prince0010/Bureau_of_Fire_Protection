<?php
$pageName = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") + 1);
?>

<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
  <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">
          <h5>
            Bureau of Fire Protection
          </h5>
        </li>
      </ol>
    </nav>
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">

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
              <a class="btn text-white bg-dark w-80" style="margin-left: 20px;" href="logouts.php"> Logout </a>

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
      <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
        <span class="label label-pill label-danger count" style="border-radius:10px;">
          <?php
          $count = 1;
          $sql = "SELECT new_user FROM user WHERE role = 'Client' ORDER BY created_at desc";
          $result = mysqli_query($conn, $sql);
          // $row = mysqli_fetch_assoc($result);
          if (mysqli_fetch_array($result)) {
            $row = $result->fetch_assoc();
            if ($row['new_user'] == '1') {
              echo '<span class="hideable" onclick="hideElement(this)" style = "height: 15px;  width: 15px;   background-color: red;   border-radius: 50%;display: inline-block; text-align: center; color: white;"> ' . $count++ . '</span>';
              //  $count++;
            } else {
              $count = 0;
            }
          }
          ?>
          <script>
            function hideElement(element) {
              // Hide the clicked element
              element.style.display = 'none';
            }
          </script>
          <i class="fa fa-bell cursor-pointer"></i>
      </a>
      <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
        <div style="height: 200px; overflow-y:scroll">
          <?php
          $sql = "SELECT name, created_at FROM user WHERE role = 'Client' ORDER BY created_at desc";
          $result = mysqli_query($conn, $sql);
          // $row = mysqli_fetch_assoc($result);
          if (mysqli_fetch_array($result)) {
            foreach ($result as $row) {

              $time = strtotime($row['created_at']);
              $display = Date(' g\h-i\m\i\n', $time);
          ?>
              <li class="mb-2">
                <a class="dropdown-item border-radius-md" href="javascript:;">
                  <div class="d-flex py-1">
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="text-sm font-weight-normal mb-1">
                        <span class="font-weight-bold">New Client :</span> <?= $row['name']; ?>
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
          } else {
            echo "No Notification!";
          }
          ?>
      </ul>
  </div>
  </li>
  </li>

  </ul>
  </ul>
  </li>
  </ul>
  </div>
  </div>
</nav>