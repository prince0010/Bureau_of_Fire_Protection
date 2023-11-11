<?php 
$pageTitle = 'BFP || Add User';
include('includes/header.php'); ?>

<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> Add Inspector

                        <a href="inspector_panel.php" class="btn btn-dark float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    
                <div id ="alertmessage">
                            <?= alertMessage(); ?>
                        </div>

                <form action="function.php" method = "POST">
                        <div class="row">
                            
                        <div class="col-md-6">
                            <div class="mb-5">
                                <label >Select Position </label>
                                <select name="position" id="" class="form-control" >
                                    <option value="" disabled>-- Select Position -- </option>
                                    <option value= "SINSP"> SINSP</option>
                                    <option value= "SF01"> SF01</option>
                                    <option value= "F01"> F01 </option>
                                    <option value= "F02"> F02 </option>
                                    <option value= "F03"> F03 </option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label>Name </label>
                                <input type="text" name = "name" class= "form-control">
                            </div>
                            </div>
                        
                        <div class="col-md-6">
                        <div class="mb-3">
                            <button type = "submit" name = "addInspector" class="btn btn-dark"> Save </button>
                    </div>
                        </div>
                           
                            </div>
        
                           
                        </div>

                </form>
                </div>
            </div>
        </div>
    </div>



<?php include('includes/footer.php'); ?>