<?php 
$pageTitle = 'BFP || Add User';
include('includes/header.php'); ?>

<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> Add Street

                        <a href="barangay_panel.php" class="btn btn-dark float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    
                <div id ="alertmessage">
                            <?= alertMessage(); ?>
                        </div>

                <form action="function.php" method = "POST">
                        <div class="row">
                       
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label> Street Name </label>
                                <input type="text" name = "barangay" class= "form-control" require>
                            </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                        <div class="mb-3">
                            <button type = "submit" name = "addBarangay" class="btn btn-dark"> Save </button>
                    </div>
                        </div>
                           
                        </div>

                </form>
                </div>
            </div>
        </div>
    </div>



<?php include('includes/footer.php'); ?>