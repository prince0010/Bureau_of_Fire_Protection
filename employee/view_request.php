<?php

    $pageTitle = "BFP || View Request";

include('include/header.php');

?>


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

        <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3> View Form
                    <a href = "index.php" class = "btn btn-dark float-end"> Back </a>
                    </h3>
                    <hr class = "bg-dark">
               
                </div>
                <div class="card-body">
                <h3>User Information</h3>
                <div id ="alertmessage">
                            <?= alertMessage(); ?>
                        </div>
                        <table class = "table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <td>
                                    Owner Name
                                    </td>
                                    <td>
                                   <?=$user['data']['owner_name'];?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    Business Name
                                    </td>
                                    <td>
                                   <?=$user['data']['business_name'];?>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                   Address
                                    </td>
                                    <td>
                                    <?=$user['data']['address'];?>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>
                                    Phone Number
                                    </td>
                                    <td>
                                   <?=$user['data']['phone_num'];?>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>
                                   Permit
                                    </td>
                                    <td>
                                                            <!-- Button trigger modal -->
                 <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#Modal">
                 <i style="font-size:17px" class="fa fa-eye"></i></a>
                            </button>
                        <!-- Modal -->
                        <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="ModalLabel">Upload Permit</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <img src="<?= './'.$user['data']['upload_permit'] ?>" style = "width:100%;height:100%;" alt="Image"/>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    Date Requested
                                    </td>
                                    <td>
                                    <?=$user['data']['date'];?>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>
                                    Landmark
                                    </td>
                                    <td>
                                   <?=$user['data']['landmark'];?>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>
                                    Barangay
                                    </td>
                                    <td>
                                   <?=$user['data']['barangay'];?>
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>
                                    Remarks
                                    </td>
                                    <td>
                                   <?=$user['data']['remarks'];?>
                                    </td>
                                    
                                </tr>
                            </tbody>
                        </table>

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
                           

                        
<?php include('include/footer.php')?>