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
                            <?= alertMessage(); ?>
                        </div>

                <form action="function.php" method = "POST">
                        <div class="row">
                        
                      
            <input type="hidden" name = "settingID" value = "<?= $editserv['data']['id']; ?>" />
            
        <div class="col-md-6">
                        <div class="mb-3">
                            <label >Name </label>
                            <input type="text" name = "name" class= "form-control" value = "<?=$_SESSION["loggedInUser"]['name'] ?>" autocomplete = "off">
                        </div>
                        </div>
    
                        <div class="col-md-6">
                        <div class="mb-3">
                            <label >Phone Number </label>
                            <input type="text" name = "phone" class= "form-control" value = "<?=$_SESSION["loggedInUser"]['phone_num'] ?>" autocomplete = "off" disabled>
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
                        
                        
                        <div class="col-md-6">
                        <div class="mb-3">
                            <label >Remarks </label>
                            <input type="text" name = "landmark" class= "form-control" autocomplete = "off">
                        </div>
                        </div>
                        
                        
                        <div class="col-md-6">
                        <div class="mb-3">
                            <label >Business Name </label>
                            <input type="text" name = "address" class= "form-control" autocomplete = "off">
                        </div>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                    <div class="mb-3">
                        <button type = "submit" name = "addUser" class="btn btn-dark"> Save </button>
                </div>
                    </div>
                        </div>
                </form>
                </div>
            </div>
        </div>
    </div>



<?php include('include/footer.php'); ?>
