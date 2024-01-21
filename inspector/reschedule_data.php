<?php

$pageTitle = "BFP || View Request";

include('includes/header.php');

?>


<?php
// we need to check if the ID is available or not, existed or not, or ID is given or not, or if ID is integer or not Integer
$paramResult = checkParamId('id');
//    if the ParamResultID is not numeric type then
if (!is_numeric($paramResult)) {
    // This will check if the parameter data is correctly given or not
    // it will echo either it will $_GET the user id or it will echo the "No ID Found" or "No Id Given"
    echo '<h5>' . $paramResult . '</h5>';
    return false;
}

// we will get the single record from the database by using parameter value
// Database table and the Id that has beING CHECKED

$user = getByID('request', checkParamId('id'));
// If its status == 200 then it means they found a data in the database table, its chgecking every data by ID of that datatable
if ($user['status'] == 200) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3> Reschedule Schedule Date
                        <a href="index.php" class="btn btn-dark float-end"> Back </a>
                    </h3>
                    <hr class="bg-dark">
                </div>
                <div class="card-body">
                    <div id="alertmessage">
                        <?= alertMessage(); ?>
                    </div>
                    <form action="confirm_reschedule.php" method = "POST">
                    <div class="row">
                    <div class="col-md-6">
                                    <div class="mb-3">
                               <input type="hidden" value =  "<?= $user['data']['id']; ?>" name = "depart_id" class="form-control">
                                        <h5 > Owner Name </h5>
                            <input type="text" value = "<?= $user['data']['owner_name'];?>"name = "Owner_name" class="form-control" require readonly>
                                    </div>
                                    </div>
                        <div class="col-md-6">
                                    <div class="mb-3">
                               
                                        <h5 > Set Re-schedule </h5>
                                        <?php
                                            $users = $user['data']['id'];
                            $inspec = "SELECT * FROM request WHERE id = '$users'";
                            $inspec_run = mysqli_query($conn, $inspec);
                            if (mysqli_num_rows($inspec_run) > 0) {
                                foreach ($inspec_run as $row) {
                            ?>
                                 <input type="date" value="<?= $row['datetime_local'] ?>" name = "datetime_local" class="form-control" require>

                            <?php
                                }
                            }
                            ?>
                                    </div>
                                    </div>
                                    </div>
                         <button type = "submit" name = "resched_data" class="btn btn-dark"> Save </button>
                                    
                </div>
            </div>
        </div>
    </div>
                        </form>
<?php
} else {
    echo '<h5>' . $user['message'] . '</h5>';
}
?>



<?php include('includes/footer.php') ?>