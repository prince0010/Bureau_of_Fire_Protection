<?php 
$pageTitle = 'BFP || Add User';
include('includes/header.php'); ?>

<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> Edit Remarks

                        <a href="remarks_panel.php" class="btn btn-dark float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    
                <div id ="alertmessage">
                            <?= alertMessage(); ?>
                        </div>

                <form action="function.php" method = "POST">
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

        $user = getByID('remarks',checkParamId('id'));
        // If its status == 200 then it means they found a data in the database table, its chgecking every data by ID of that datatable
        if($user['status'] == 200)
        {
            ?>
                <input type="hidden" value =<?=$user['data']['id'];?> name = "remarksId" required>
                        <div class="row">
                        <div class="col-md-6">
                        <div class="mb-3">
                                <label> Remarks </label>
                                <textarea name="remarks" cols="30" rows="10" class ="form-control"><?=$user['data']['remarks'] ?> </textarea>
                            </div>
                        <div class="col-md-6">
                        <div class="mb-3">
                            <button type = "submit" name = "updateRemarks" class="btn btn-dark"> Save </button>
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
                </form>
                </div>
            </div>
        </div>
    </div>



<?php include('includes/footer.php'); ?>