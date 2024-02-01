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
// SELECT * FROM inspection_order INNER JOIN request ON request.id = inspection_order.inspection_userid
$user = getByID('request', checkParamId('id'));
// If its status == 200 then it means they found a data in the database table, its chgecking every data by ID of that datatable

if($user['status'] == 200)
        {
            ?>
              <div class="card">
                <div class="card-header">
                <h5 class="mb-3"> Confirm Inspection Data
            <a href="inspection_order.php" class="btn btn-dark float-end">Back</a>
            </h5>
                </div>
                <div class="card-body">
                <input type="hidden" value =<?=$user['data']['id'];?> name = "durationId" required>
                        <div class="row">
                        <div class="col-md-6">
                        <div class="mb-3">
                                <label> Owner Name </label>
                                <input type="text" value="<?= $user['data']['owner_name']?>" required class="form-control">
                            </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="mb-3">
                                        <label >Business Name </label>
                                        <input type="text" value =<?=$user['data']['business_name'];?> class= "form-control" required>
                                    </div>
                                    </div>

                                    <div class="col-md-6">
                                    <div class="mb-3">
                                        <label >Address </label>
                                        <textarea name="duration" cols="30" rows="1" class ="form-control"><?=$user['data']['address'] ?> </textarea>
                                    </div>
                                    </div>

                                    <div class="col-md-6">
                                    <div class="mb-3">
                                        <label >Phone Number </label>
                                        <input type="text" value =<?=$user['data']['phone_num'];?> class= "form-control" required>
                                    </div>
                                    </div>

                                    <div class="col-md-6">
                                    <div class="mb-3">
                                    <label >Permit </label>
                                    <br>
                                         <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#Modal">
                                        <i style="font-size:17px" class="fa fa-eye"></i></a>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="ModalLabel">Upload Permit</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="<?= './' . $user['data']['upload_permit'] ?>" style="width:100%;height:100%;" alt="Image" />
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                              </div>

                                    <div class="col-md-6">
                                    <div class="mb-3">
                                        <label > Date Requested </label>
                                        <input type="text" value =<?=$user['data']['date']; ?> class= "form-control" required>
                                    </div>
                                    </div>

                                    <div class="col-md-6">
                                    <div class="mb-3">
                                        <label > Landmark </label>
                                        <input type="text" value =<?=$user['data']['landmark']; ?> class= "form-control" required>
                                    </div>
                                    </div>

                                    <div class="col-md-6">
                                    <div class="mb-3">
                                        <label > Barangay </label>
                                        <input type="text" value =<?=$user['data']['barangay'];  ?> class= "form-control" required>
                                    </div>
                                    </div>

                                    <div class="col-md-6">
                                    <div class="mb-3">
                                        <label > Remarks </label>
                                        <input type="text" value =<?=$user['data']['remarks'];  ?> class= "form-control" required>
                                    </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                    <div class="mb-3">
                                        <label > To </label>
                                        <!-- <input type="text" value =<?=$user['data']['inspection_name'];  ?> class= "form-control" required> -->
                                   <select name="inspector_name" id="" class="form-control">
                            <?php

                                    $inspec = "SELECT * FROM inspector_user
                                    ";
                                    $inspec_run = mysqli_query($conn, $inspec);
                                    if (mysqli_num_rows($inspec_run) > 0) {
                                        foreach ($inspec_run as $row) {
                                    ?>
                                    <option value= "<?=$row['inspector_name']; ?> " <?=$user['data']['inspection_name'] == $row['inspector_name'] ? 'Selected' : '' ?> > <?=$row['inspector_name']; ?></option>
                                <?php
                                }
                                ?>
                        </select>
                      <?php

                        } else {
                        ?>
                        <option value=""> No Record Found </option>
                        <?php
                        }
                        ?>
                                    </div>
                                    </div>
                                     
                                    <div class="col-md-6">
                                    <div class="mb-3">
                                        <label > Proceed </label>
                                        <textarea name="duration" cols="30" rows="2" class ="form-control"><?=$user['data']['proceed_info'] ?> </textarea>
                                        
                                    </div>
                                    </div>

                                    <div class="col-md-6">
                                    <div class="mb-3">
                                        <label > Purpose </label>
                                        <!-- <textarea name="duration" cols="30" rows="4" class ="form-control"><?=$user['data']['purpose_info'] ?> </textarea> -->
                                        <select name="inspector_name" id="" class="form-control">
                                       <?php

                                    $inspec = "SELECT * FROM request
                                    ";
                                    $inspec_run = mysqli_query($conn, $inspec);
                                    if (mysqli_num_rows($inspec_run) > 0) {
                                        foreach ($inspec_run as $row) {
                                    ?>
                                    <option value= "<?=$row['purpose_info']; ?> " <?=$user['data']['purpose_info'] == $row['purpose_info'] ? 'Selected' : '' ?> ><?=$row['purpose_info']; ?></option>
                                <?php
                                }
                                ?>
                        </select>
                      <?php

                        } else {
                        ?>
                        <option value=""> No Record Found </option>
                        <?php
                        }
                        ?>
                                    </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                    <div class="mb-3">
                                        <label > Duration </label>
                                        <!-- <textarea name="duration" cols="30" rows="4" class ="form-control"><?=$user['data']['duration'] ?> </textarea> -->
                                        <select name="inspector_name" id="" class="form-control">
                                       <?php

                                    $inspec = "SELECT * FROM request
                                    ";
                                    $inspec_run = mysqli_query($conn, $inspec);
                                    if (mysqli_num_rows($inspec_run) > 0) {
                                        foreach ($inspec_run as $row) {
                                    ?>
                                    <option value= "<?=$row['duration']; ?> " <?=$user['data']['duration'] == $row['duration'] ? 'Selected' : '' ?> ><?=$row['duration']; ?></option>
                                <?php
                                }
                                ?>
                        </select>
                      <?php

                        } else {
                        ?>
                        <option value=""> No Record Found </option>
                        <?php
                        }
                        ?>  
                                    </div>
                                    </div>
                                      
                                    <div class="col-md-6">
                                    <div class="mb-3">
                                        <label > Remarks_IO </label>
                                        <!-- <textarea name="remarks" cols="30" rows="4" class ="form-control"><?=$user['data']['remarks_IO'] ?> </textarea> -->
                                        <select name="inspector_name" id="" class="form-control">
                                       <?php

                                    $inspec = "SELECT * FROM request
                                    ";
                                    $inspec_run = mysqli_query($conn, $inspec);
                                    if (mysqli_num_rows($inspec_run) > 0) {
                                        foreach ($inspec_run as $row) {
                                    ?>
                                    <option value= "<?=$row['remarks_IO']; ?> " <?=$user['data']['remarks_IO'] == $row['remarks_IO'] ? 'Selected' : '' ?> ><?=$row['remarks_IO']; ?></option>
                                <?php
                                }
                                ?>
                        </select>
                      <?php

                        } else {
                        ?>
                        <option value=""> No Record Found </option>
                        <?php
                        }
                        ?>
                                    </div>
                                    </div>

                                    <div class="col-md-6">
                                    <div class="mb-3">
                                        <label > Set Scheduled </label>
                                        <!-- <input type="datetime-local" value="<?=$user['data']['datetime_local'] ?>" name = "datetime_local" class="form-control" require> -->
                                        <!-- <input class="form-control" type="datetime-local" value="<?=$user['data']['datetime_local'] ?>" id="datetimepicker" name="datetime_local"> -->
                                        <input type="datetime-local" id="datetime" value="<?=$user['data']['datetime_local'] ?>" name="datetime_local" class = "form-control">
                                    </div>
                                    </div>

                    </div>
                    
                        <div class="col-md-6">
                        <div class="mb-3">
                        <a href="confirm_data.php?id=<?= $user['data']['id']; ?>" class="btn btn-dark " onclick="return confirm('Are you sure you want to Confirm?')"> Confirm </a>
                        <a href="denied_request.php?id=<?= $user['data']['id']; ?>" class="btn btn-danger "> Denied </a>
                     
                    </div>
                        </div>
                            </div>
                        </div>
                        <?php
                            }
                            else 
                            {
                               echo '<h5>'.$user['message'].'</h5>' ;
                            }
                        ?>
   </div>


   <?php include('includes/scripts.php'); ?>