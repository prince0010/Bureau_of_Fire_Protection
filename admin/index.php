<?php include('includes/header.php'); ?>

<div class="row">
<h4 class="card-header mb-4 mx-2" style="font-weight: bold;">
      Dashboard
    </h4>
  <div class="col-md-3 mb-4">
  
    <div class="card card-body p-3 text-white" style="background-color: #0b1d78;" >
    <i class="fa fa-user-alt" style="font-size: 30px; margin-bottom: 10px;"></i>
      <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Users</p>
      <h5 class="font-weight-bolder mb-0  text-white">
        <?= getCount('user'); ?>
      </h5>

    </div>
  </div>
  <div class="col-md-3 mb-4 " >
    <div class="card card-body p-3 text-white " style="background-color: #0045a5;">
    <i class="fa fa-user-plus" style="font-size: 30px; margin-bottom: 10px;"></i>
      <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Admin Account</p>
      <h5 class="font-weight-bolder mb-0 text-white">
        <?php
        $todaysDate = date('Y-m-d');
        $query = "SELECT * FROM user WHERE role='Admin'";
        $result = mysqli_query($conn, $query);
        $totalCount = mysqli_num_rows($result);
        echo $totalCount;
        ?>

      </h5>

    </div>
  </div>
  <div class="col-md-3 mb-4">
    <div class="card card-body p-3 text-white text-white" style="background-color: #0069c0;">
    <i class="fa fa-user-plus" style="font-size: 30px; margin-bottom: 10px;"></i>
      <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Employee Account</p>
      <h5 class="font-weight-bolder mb-0 text-white">
        <?php
        $todaysDate = date('Y-m-d');
        $query = "SELECT * FROM user WHERE role='Employee' ";
        $result = mysqli_query($conn, $query);
        $totalCount = mysqli_num_rows($result);
        echo $totalCount;
        ?>

      </h5>

    </div>
  </div>

  <div class="col-md-3 mb-4">
    <div class="card card-body p-3 text-white" style="background-color: #008ac5;">
    <i class="fa fa-user-plus" style="font-size: 30px; margin-bottom: 10px;"></i>
      <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Client Account</p>
      <h5 class="font-weight-bolder mb-0 text-white">
        <?php
        $todaysDate = date('Y-m-d');
        $query = "SELECT * FROM user WHERE role='Client'";
        $result = mysqli_query($conn, $query);
        $totalCount = mysqli_num_rows($result);
        echo $totalCount;
        ?>

      </h5>

    </div>
  </div>
  <div class="col-md-3 mb-4">
    <div class="card card-body p-3 text-white" style="background-color: #00a9b5;">
    <i class="fa fa-user-tie" style="font-size: 30px; margin-bottom: 10px;"></i>
      <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Inspector </p>
      <h5 class="font-weight-bolder mb-0 text-white">
        <?= getCount('inspector_user'); ?>

      </h5>

    </div>
  </div>
  <div class="col-md-3 mb-4">
    <div class="card card-body p-3 text-white" style="background-color: #d32d41;">
    <i class="fa fa-user-slash" style="font-size: 30px; margin-bottom: 10px;"></i>
      <p class="text-sm mb-0 text-capitalize font-weight-bold">User Banned</p>
      <h5 class="font-weight-bolder mb-0 text-white">
        <?php
        $query = "SELECT * FROM user WHERE is_ban='1'";
        $result = mysqli_query($conn, $query);
        $totalCount = mysqli_num_rows($result);
        echo $totalCount;
        ?>
      </h5>

    </div>
  </div>


</div>


<?php include('includes/scripts.php'); ?>