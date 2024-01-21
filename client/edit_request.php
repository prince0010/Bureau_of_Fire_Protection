




<?php 
$pageTitle = 'BFP || Edit Request';
include('include/header.php'); ?>

<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> Edit Request
                        <a href="index.php" class="btn btn-dark float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    
                <div id ="alertmessage">
                            <?= alertMessage(); ?>
                        </div>

                <form action="function.php" method = "POST" enctype="multipart/form-data">
                <?php
            // we need to check if the ID is available or not, existed or not, or ID is given or not, or if ID is integer or not Integer
            $paramResult = checkParamId('id');
            //    if the ParamResultID is not numeric type then
            if(!is_numeric($paramResult)){
                // This will check if the parameter data is correctly given or not
                // it will echo either it will $_GET the user id or it will echo the "No ID Found" or "No Id Given"
                echo '<h5>'.$paramResult.'</h5>';
                return false;
            }

        // we will get the single record from the database by using parameter value
            // Database table and the Id that has beING CHECKED

        $user = getByID('request',checkParamId('id'));
        // If its status == 200 then it means they found a data in the database table, its chgecking every data by ID of that datatable
        if($user['status'] == 200)
        {
            ?>
        <input type="hidden" value =<?=$user['data']['id'];?> name = "requestId" required>
                        <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                            <label > Name of Owner </label>
                            <input type="text" name = "owner_name" class= "form-control" value = "<?=$user["data"]['owner_name'] ?>" autocomplete = "off" required>
                            </div>
                            </div>

                            <div class="col-md-6">
                        <div class="mb-3">
                            <label > Business Name </label>
                            <input type="text" name = "b_name" value = "<?=$user["data"]['business_name'] ?>" class= "form-control" autocomplete = "off" required>
                        </div>
                        </div>

                        <div class="col-md-6">
                        <div class="mb-3">
                            <label > Date </label>
                            <input type="date" value="<?=$user['data']['date'] ?>" name = "datetime_local" class="form-control" require>
                        </div>
                        </div>

                        <div class="col-md-6">
                        <div class="mb-3">
                            <label > Phone Number </label>
                            <input type="text" name = "phone_num" value = "<?= $user["data"]['phone_num'] ?>" class= "form-control" autocomplete = "off" required>
                        </div>
                        </div>

                        <div class="col-md-6">
                        <div class="mb-3">
                            <label> Upload Permit </label>
                            <br>
                            <input type="file" name ="image" class="form-control" required >
                            <input type="hidden" name ="old_image" value="<?php echo $user["data"]['upload_permit']  ?>" class="form-control" required >

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-dark my-2" data-bs-toggle="modal" data-bs-target="#Modal">
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
                                                    <img src="<?= './' . $user["data"]['upload_permit'] ?>" style="width:100%;height:100%;" alt="Image" />
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
                            <label > Street </label>
                            <select name="barangay" id="" class="form-control" >
                                    <option value="" disabled>-- Select Barangay -- </option>
                                    <?php
                            $inspec = "SELECT * FROM barangay";
                            $inspec_run = mysqli_query($conn, $inspec);
                            if (mysqli_num_rows($inspec_run) > 0) {
                                foreach ($inspec_run as $row) {
                            ?>
                                    <!-- <option value="<?= $user['data']['barangay']; ?>" ><?= $row['barangay_name']; ?></option> -->
                                    <option value="<?= $user['data']['barangay'];?>" <?= $user['data']['barangay']  == true ? ($user['data']['barangay'] == $row['barangay_name'] ? 'selected' : ' ') : ' ' ?>> <?= $row['barangay_name']?>
                                <?php
                                }
                            }
                                ?>
                                
                         <option value="<?= $user["data"]['barangay']; ?>" ><?= $user["data"]['barangay']; ?></option>
                            </select>
                        </div></div> 

                        <div class="col-md-6">
                        <div class="mb-3">
                            <label > Address </label>
                            <input type="text" name = "address" value = "<?=$user["data"]['address'] ?>" class= "form-control" autocomplete = "off" required>
                        </div>
                        </div>

                        <div class="col-md-6">
                        <div class="mb-3">
                            <label > Landmark </label>
                            <input type="text" name = "landmark" value = "<?=$user["data"]['landmark'] ?>" class= "form-control" autocomplete = "off" required>
                        </div>
                        </div>
                        
                        <div class="col-md-6">
                        <div class="mb-3">
                            <label > Remarks </label>
                            <input type="text" name = "remarks" value = "<?=$user["data"]['remarks'] ?>" class= "form-control" autocomplete = "off" required>
                        </div>
                        </div>

                            </div>
                            <div class="col-md-6">
                        <div class="mb-3">
                            <button type = "submit" name = "updateRequest" class="btn btn-dark"> Save </button>
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
                </form>
                </div>
            </div>
        </div>
    </div>



<?php include('include/footer.php'); ?>