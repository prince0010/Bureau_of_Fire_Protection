<?php 
$pageTitle = 'BFP || Add User';
include('includes/header.php'); ?>

<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> Add Duration

                        <a href="duration_panel.php" class="btn btn-dark float-end">Back</a>
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
                                <label> Duration </label>
                                <textarea name="duration" cols="30" rows="10" class ="form-control"> </textarea>
                            </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                        <div class="mb-3">
                            <button type = "submit" name = "addDuration" class="btn btn-dark"> Save </button>
                    </div>
                        </div>
                           
                        </div>

                </form>
                </div>
            </div>
        </div>
    </div>



<?php include('includes/scripts.php'); ?>