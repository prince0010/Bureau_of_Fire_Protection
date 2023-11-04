<?php 
$pageTitle = 'BFP || Form Request';
include('include/header.php'); ?>

<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> Form Request

                        <a href="index.php" class="btn btn-dark float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    
                <div id ="alertmessage">
                            <?= alertMessage(); 
                            
                            ?>
                        </div>

                <form action="client_function.php" method = "POST" enctype="multipart/form-data">
                        <div class="row">
                        
                      <!-- ID OF EACH USERS -->
            <input type="hidden" name = "form_id" value = "<?=$_SESSION["loggedInUser"]['id']?>" />
            
                      <div class="col-md-6">
                        <div class="mb-3">
                            <label > Name of Owner </label>
                            <input type="text" name = "name" class= "form-control" value = "<?=$_SESSION["loggedInUser"]['name'] ?>" autocomplete = "off">
                        </div>
                        </div>

                        <div class="col-md-6">
                        <div class="mb-3">
                            <label > Business Name </label>
                            <input type="text" name = "b_name" class= "form-control" autocomplete = "off">
                        </div>
                        </div>


                        <div class="col-md-6">
                            <div class="mb-3">
                            <!-- Philippines Date Format -->
                        <?php
                        $dt = new DateTime("now", new DateTimeZone('Asia/Manila'));
                        echo '<label> Date </label>';
                        echo '<input type="date" name = "date" class = "form-control" value="' . $dt->format('Y-m-d') . '" autocomplete = "off"/>';
                        ?>
                            </div>
                        </div>

                        <div class="col-md-6">
                        <div class="mb-3">
                            <label >Phone Number </label>
                            <input type="text" name = "phone" class= "form-control" value = "<?=$_SESSION["loggedInUser"]['phone_num'] ?>" autocomplete = "off" readonly >
                        </div>
                    </div>
                        
                        <div class="col-md-6">
                        <div class="mb-3">
                            <label> Upload Permit</label>
                            <input type="file" name ="image" class="form-control" >
                        </div>
                        </div>

                    
                    <div class="col-md-6">
                    <div class="mb-3">
                        <label >Barangay </label>
                        <input type="text" name = "barangay" class= "form-control" autocomplete = "off">
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="mb-3">
                        <label >Address </label>
                        <input type="text" name = "address" class= "form-control" autocomplete = "off">
                    </div>
                    </div>
                    
                        
                        <div class="col-md-6">
                        <div class="mb-3">
                            <label >Landmark </label>
                            <input type="text" name = "landmark" class= "form-control" autocomplete = "off">
                        </div>
                        </div>
                      
                    </div>
                    <div class="col-md-6">
                    <div class="mb-3">
                        <button type = "submit" name = "formRequest" class="btn btn-dark"> Save </button>
                </div>
                    </div>
                        </div>
                </form>
                </div>
            </div>
        </div>
    </div>



<?php include('include/footer.php'); ?>
