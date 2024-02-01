<?php
include('include/header.php');
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
                <h5> Inspection Order
                    <a href="index.php" class="btn btn-dark float-end">Back</a>
                </h5>
            </div>
            <div class="card-body">
                <!-- Alert -->
                <div id="alertmessage">
                    <?= alertMessage(); ?>
                </div>
                <form action="function.php" method="POST" enctype="multipart/form-data">

                <input type="hidden" name="inspec_Id" value="<?= $user['data']['id']; ?>">

                    <div class="mb-3">
                        <label>To</label>
                        <select name="inspector_name" id="" class="form-control">
                            <?php

                            $inspec = "SELECT * FROM inspector_user
                            ";
                            $inspec_run = mysqli_query($conn, $inspec);
                            if (mysqli_num_rows($inspec_run) > 0) {
                                foreach ($inspec_run as $row) {
                            ?>
                                    <option value="<?= $row['inspector_name']; ?>" ><?= $row['inspector_name']; ?></option>
                                <?php
                                }
                                ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>Proceed</label>

                        <textarea name="proceed" id="" cols="30" rows="5" class="form-control" require></textarea>
                    </div>

                    <div class="mb-3">
                        <label>Purpose</label>
                        <select name="purpose" id="" class="form-control">
                            <?php

                                $inspec = "SELECT * FROM purpose ";
                                $inspec_run = mysqli_query($conn, $inspec);
                                if (mysqli_num_rows($inspec_run) > 0) {
                                    foreach ($inspec_run as $row) {
                            ?>
                                    <option value="<?= $row['purpose']; ?>"><?= $row['purpose']; ?></option>
                            <?php
                                    }
                                }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Duration</label>
                        <select name="duration" id="" class="form-control">
                            <?php
                                $inspec = "SELECT * FROM duration ";
                                $inspec_run = mysqli_query($conn, $inspec);
                                if (mysqli_num_rows($inspec_run) > 0) {
                                    foreach ($inspec_run as $row) {
                            ?>
                                    <option value="<?= $row['duration']; ?>"><?= $row['duration']; ?></option>
                            <?php
                                    }
                                }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Remarks or Additional Instruction </label>
                        <textarea name="remarks" id="" cols="30" rows="5" class="form-control" require></textarea>
                      
                       
                    </div>
                    <div class="col-md-6">
                                    <div class="mb-3">
                               
                                        <label > Set Schedule </label>
                                        <?php
                                            $users = $user['data']['id'];
                            $inspec = "SELECT * FROM request WHERE id = '$users'";
                            $inspec_run = mysqli_query($conn, $inspec);
                            if (mysqli_num_rows($inspec_run) > 0) {
                                foreach ($inspec_run as $row) {
                            ?>
                  
                                
                                 <!-- <input type="date" class="form-control" autocomplete="off" name = "datetime_local" id="txtDate" />  -->
                            <!-- <input type="datetime-local" name="datefield" id="datefield" min="today_min" max="today_max"> <span class="validity"></span> -->
  


<!-- <input type="datetime-local" id="dateInput"> -->
<!-- <input type="datetime-local" id="datepicker" name="datepicker"> -->
<!-- <input class="form-control" type="datetime-local" id="datetimepicker" name="datetime_local"> -->
                    <input type="datetime-local" id="datetime" name="datetime_local" class = "form-control" required>

                         <?php
                         
                                }
                            }
                            ?>
                                    </div>
                                    </div>

                    <div class="mb-3">
                        <button type="submit" name = "inspecSave" class="btn btn-dark"> Save </button>
                    </div>
                <?php

                            } else {
                ?>
                    <option value=""> No Record Found </option>
                <?php
                            }

                            
                ?>
                </form>

            </div>
        </div>
    </div>
</div>
<?php
} else {
    echo '<h5>' . $user['message'] . '</h5>';
}
?>
 

<!-- 
<?php
include('include/footer.php');

?> -->