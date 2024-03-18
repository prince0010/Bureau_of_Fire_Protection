<?php include('includes/header.php'); ?>

<?php
$weekCount = 0; // Initialize $weekCount to 0

// Query to get counts for the current week and month
$query = "SELECT 
            SUM(WEEK(created_at) = WEEK(NOW()) AND YEAR(created_at) = YEAR(NOW())) AS week_count,
            SUM(MONTH(created_at) = MONTH(NOW()) AND YEAR(created_at) = YEAR(NOW())) AS month_count,
            COUNT(*) AS total_count
          FROM request";

// Execute query
$result = mysqli_query($conn, $query);

// Check if query result is valid
if ($result && mysqli_num_rows($result) > 0) {
    // Fetch counts for the current week, month, and total
    $countData = mysqli_fetch_assoc($result);
    // Update counts if not null
    $weekCount = isset($countData['week_count']) ? $countData['week_count'] : 0;
    // Similarly, initialize $monthCount and $totalCount
    $monthCount = isset($countData['month_count']) ? $countData['month_count'] : 0;
    $totalCount = isset($countData['total_count']) ? $countData['total_count'] : 0;
}

// Fetch today's inspection order count
$todayCount = 0;
$todayDate = date('Y-m-d');
$queryToday = "SELECT COUNT(*) AS today_count FROM request WHERE DATE(created_at) = '$todayDate'";
$resultToday = mysqli_query($conn, $queryToday);

if ($resultToday && mysqli_num_rows($resultToday) > 0) {
    $todayData = mysqli_fetch_assoc($resultToday);
    $todayCount = isset($todayData['today_count']) ? $todayData['today_count'] : 0;
}

// Calculate the percentage of today's inspection orders out of the total
$percentageInspectionOrdersToday = ($todayCount / $totalCount) * 100;
// Cap the percentage at 100% if it exceeds
$percentageInspectionOrdersToday = min($percentageInspectionOrdersToday, 100);
// Determine the color based on whether the percentage increased or decreased
$colorToday = ($percentageInspectionOrdersToday > 0) ? 'green' : 'red';
?>
<div class="row">
<h4 class="card-header mb-4 mx-2" style="font-weight: bold;">
      Account Distribution
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

<br>
<br>

<div class="row">

    <h4 class="card-header mb-4 mx-2" style="font-weight: bold;">
        Total Inspection Order
    </h4>

    <div class="col-md-4">
        <div class="card card-body p-3" style="background-color: rgba(11,29,120);">
            <i class="fa fa-file-alt text-white" style="font-size: 30px; margin-bottom: 10px;"></i>
            <h5 class="card-title mb-4 text-white">Today Inspection Order Request</h5>
            <p class="card-text text-white">Today: <?= $todayCount ?></p>
            <?php
                // Calculate the percentage of inspection orders for today
                $percentageInspectionOrdersToday = ($todayCount / $totalCount) * 100;
                // Cap the percentage at 100% if it exceeds
                $percentageInspectionOrdersToday = min($percentageInspectionOrdersToday, 100);
                // Determine the color based on whether the percentage increased or decreased
                $colorToday = ($percentageInspectionOrdersToday > 0) ? 'green' : 'red';
            ?>
            <h4 class="font-weight-bold" style="color: <?= $colorToday ?>;">
                <?= number_format($percentageInspectionOrdersToday, 1) ?>%
                <?php
                    // Add arrow icon based on the percentage change trend
                    $arrowIconToday = ($percentageInspectionOrdersToday > 0) ? 'fa fa-arrow-up' : 'fa fa-arrow-down';
                ?>
                <i class="<?= $arrowIconToday ?>"></i>
            </h4>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-body p-3" style="background-color: rgba(11,29,120);">
            <i class="fa fa-file-alt text-white" style="font-size: 30px; margin-bottom: 10px;"></i>
            <h5 class="card-title mb-4 text-white">This Week</h5>
            <p class="card-text text-white">This Week: <?= $weekCount ?></p>
            <?php
                // Calculate the percentage of inspection orders for this week
                $percentageInspectionOrdersThisWeek = ($weekCount / $totalCount) * 100;
                // Cap the percentage at 100% if it exceeds
                $percentageInspectionOrdersThisWeek = min($percentageInspectionOrdersThisWeek, 100);
                // Determine the color based on whether the percentage increased or decreased
                $colorWeek = ($percentageInspectionOrdersThisWeek > 0) ? 'green' : 'red';
            ?>
            <h4 class="font-weight-bold" style="color: <?= $colorWeek ?>;">
                <?= number_format($percentageInspectionOrdersThisWeek, 1) ?>%
                <?php
                    // Add arrow icon based on the percentage change trend
                    $arrowIconWeek = ($percentageInspectionOrdersThisWeek > 0) ? 'fa fa-arrow-up' : 'fa fa-arrow-down';
                ?>
                <i class="<?= $arrowIconWeek ?>"></i>
            </h4>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-body p-3" style="background-color: #1C4E80;">
            <i class="fa fa-file-alt text-white" style="font-size: 30px; margin-bottom: 10px;"></i>
            <h5 class="card-title mb-4 text-white">This Month</h5>
            <p class="card-text text-white">This Month: <?= $monthCount ?></p>
            <?php
                // Calculate the percentage of inspection orders for this month
                $percentageInspectionOrdersThisMonth = ($monthCount / $totalCount) * 100;
                // Cap the percentage at 100% if it exceeds
                $percentageInspectionOrdersThisMonth = min($percentageInspectionOrdersThisMonth, 100);
                // Determine the color based on whether the percentage increased or decreased
                $colorMonth = ($percentageInspectionOrdersThisMonth > 0) ? 'green' : 'red';
            ?>
            <h4 class="font-weight-bold" style="color: <?= $colorMonth ?>;">
                <?= number_format($percentageInspectionOrdersThisMonth, 1) ?>%
                <?php
                    // Add arrow icon based on the percentage change trend
                    $arrowIconMonth = ($percentageInspectionOrdersThisMonth > 0) ? 'fa fa-arrow-up' : 'fa fa-arrow-down';
                ?>
                <i class="<?= $arrowIconMonth ?>"></i>
            </h4>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-body p-3 mt-4" style="background-color:  #4CB5F5;">
            <i class="fa fa-file-alt text-white" style="font-size: 30px; margin-bottom: 10px;"></i>
            <h5 class="card-title mb-4 text-white">This Inspection Order</h5>
            <div class="row">
                <p class="card-text text-white">Total: <?= $totalCount ?></p>
                <?php
                    // Calculate the percentage of users who requested an inspection order
                    $percentageInspectionOrdersTotal = ($monthCount / $totalCount) * 100;
                    // Cap the percentage at 100% if it exceeds
                    $percentageInspectionOrdersTotal = min($percentageInspectionOrdersTotal, 100);
                    // Determine the color based on whether the percentage increased or decreased
                    $colorTotal = ($percentageInspectionOrdersTotal > 0) ? 'green' : 'red';
                ?>
                <h4 class="font-weight-bold" style="color: <?= $colorTotal ?>;">
                    <?= number_format($percentageInspectionOrdersTotal, 1) ?>%
                    <?php
                        // Add arrow icon based on the percentage change trend
                        $arrowIconTotal = ($percentageInspectionOrdersTotal > 0) ? 'fa fa-arrow-up' : 'fa fa-arrow-down';
                    ?>
                    <i class="<?= $arrowIconTotal ?>"></i>
                </h4>
            </div>
        </div>
    </div>
    
</div>

<br>
<br>

  <?php
$conn = mysqli_connect('localhost', 'root', '', 'bfp');

$query = "SELECT 
            SUM(WEEK(created_at) = WEEK(NOW()) AND YEAR(created_at) = YEAR(NOW())) AS week_count,
            SUM(MONTH(created_at) = MONTH(NOW()) AND YEAR(created_at) = YEAR(NOW())) AS month_count
          FROM request";

$result = mysqli_query($conn, $query);

$weekCount = 0;
$monthCount = 0;

if ($result && mysqli_num_rows($result) > 0) {
    $countData = mysqli_fetch_assoc($result);
    $weekCount = isset($countData['week_count']) ? $countData['week_count'] : 0;
    $monthCount = isset($countData['month_count']) ? $countData['month_count'] : 0;
}

$query = "SELECT role, COUNT(*) as count FROM user WHERE role != 'Admin' GROUP BY role";
$result = mysqli_query($conn, $query);

$roles = array();
$counts = array();

while ($row = mysqli_fetch_assoc($result)) {
    $roles[] = $row['role'];
    $counts[] = $row['count'];
}
?>

<div class="row my-5">
    <div class="col-md-6">
        <h4 class="card-header mb-4 mx-2" style="font-weight: bold;">
            Inspection Order Requests (This Week and This Month)
        </h4>
        <div class="card">
            <div class="card-body">
                <canvas id="inspectionOrderChart"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <h4 class="card-header mb-4 mx-2" style="font-weight: bold;">
            User Role Distribution
        </h4>
        <div class="card">
            <div class="card-body">
                <canvas id="userRoleChart"></canvas>
            </div>
        </div>
    </div>
</div>

<script>
    var ctx1 = document.getElementById('inspectionOrderChart').getContext('2d');

    var inspectionOrderChart = new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ['This Week', 'This Month', 'Total Request'],
            datasets: [{
                label: 'Inspection Order Requests',
                data: [<?= $weekCount ?>, <?= $monthCount ?>, <?= $weekCount + $monthCount ?>],
                backgroundColor: [
                  'rgba(11,29,120)',
                  '#1C4E80',  
                  '#4CB5F5' 
                ],
                borderColor: [
                    'rgba(0, 0, 139, 1)',
                    'rgba(139, 0, 0, 1)', 
                    'rgba(139, 69, 19, 1)' 
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    var roles = <?php echo json_encode($roles); ?>;
    var counts = <?php echo json_encode($counts); ?>;
 
    var colors = [];
    for (var i = 0; i < roles.length; i++) {
        switch (roles[i]) {
            case 'Employee':
                colors.push('#1F3F49'); 
                break;
            case 'Client':
                colors.push('#484848'); 
                break;
            case 'Inspector':
                colors.push('#20283E'); 
                break;
            default:
                colors.push('#cccccc'); 
        }
    }

    var ctx2 = document.getElementById('userRoleChart').getContext('2d');
    var userRoleChart = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: roles,
            datasets: [{
                label: 'User Role Distribution',
                data: counts,
                backgroundColor: colors, 
                borderWidth: 2
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>



<?php include('includes/scripts.php'); ?>