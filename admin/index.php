<?php include('includes/header.php');?>

<div class="row">
<div class="col-md-3 mb-4">
          <div class="card card-body p-3">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Users</p>
                    <h5 class="font-weight-bolder mb-0">
                      <?= getCount('user');?>
                    </h5>
              
          </div>
          </div>
          <div class="col-md-3 mb-4">
          <div class="card card-body p-3">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Admin Account</p>
                    <h5 class="font-weight-bolder mb-0">
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
          <div class="card card-body p-3">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Employee Account</p>
                    <h5 class="font-weight-bolder mb-0">
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
          <div class="card card-body p-3">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Client Account</p>
                    <h5 class="font-weight-bolder mb-0">
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
          <div class="card card-body p-3">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Inspector </p>
                    <h5 class="font-weight-bolder mb-0">
                    <?= getCount('inspector_user');?>

                    </h5>
              
          </div>
          </div>
          <div class="col-md-3 mb-4">
          <div class="card card-body p-3">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">User Banned</p>
                    <h5 class="font-weight-bolder mb-0">
                    <?php
                        $query = "SELECT * FROM user WHERE is_ban='1'";
                        $result = mysqli_query($conn, $query);
                        $totalCount = mysqli_num_rows($result);
                        echo $totalCount;
                  ?>  
                    </h5>
              
          </div>
          </div>
          <div class="col-md-3 mb-4">
          <div class="card card-body p-3">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Today Acount Added</p>
                    <h5 class="font-weight-bolder mb-0">
                    <?php
                        $todayAdd = date("Y-m-d");
                        $query = "SELECT * FROM user WHERE created_at='$todayAdd'";
                        $result = mysqli_query($conn, $query);
                        $totalCount = mysqli_num_rows($result);
                        echo $totalCount;
                  ?>  

                    </h5>
              
          </div>
          </div>
          
</div>


<?php include('includes/footer.php');?>