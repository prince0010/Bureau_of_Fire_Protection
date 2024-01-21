<?php 
$pageTitle = 'BFP || Denied Request';
include('includes/header.php'); ?>


<div class="row">
        <div class="col-md-12">
            <div class="card">
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

?>
                <div class="card-header">
                    <h4> Denied Request
                        <a href="denied_io.php" class="btn btn-dark float-end">Back</a>
                    </h4>
                    <h5 class="mt-4">Check the checkboxes of the reasons of denying the form request.</h5>
                </div>
                <div class="card-body">

                     <div id ="alertmessage">
                            <?= alertMessage(); ?>
                        </div>
                     
                <form action="function.php" method = "POST">
               
                    <?php

                          
                            // If its status == 200 then it means they found a data in the database table, its chgecking every data by ID of that datatable
                            if($user['status'] == 200)
                            {
                                ?>
                   <input type="hidden" value =<?=$user['data']['id'];?> name = "userId" required>
              
                         <div class="row">
                                <div class="col-md-3">
                                <div class="mb-3">
                                    <label >Owner Name </label>
                                    <br/>
                                    <input type="checkbox" <?=$user['data']['denied_owner_name'] == true ? 'checked' : '' ;?>  class="my-2 mx-4" name = "owner_name" style = "width:30px;height:30px;">   
                                </div>
                                </div>
                                    
                                      <div class="col-md-3">
                                <div class="mb-3">
                                    <label >Business Name </label>
                                    <br/>
                                    <input type="checkbox" <?=$user['data']['denied_business_name'] == true ? 'checked' : '' ;?>  class="my-2 mx-4" name = "business_name" style = "width:30px;height:30px;">   
                                </div>
                                </div>
                                <div class="col-md-3">
                                <div class="mb-3">
                                    <label >Address </label>
                                    <br/>
                                    <input type="checkbox" <?=$user['data']['denied_address'] == true ? 'checked' : '' ;?> class="my-2 mx-4" name = "address" style = "width:30px;height:30px;">   
                                </div>
                                </div>
                                <div class="col-md-3">
                                <div class="mb-3">
                                    <label > Phone Number </label>
                                    <br/>
                                    <input type="checkbox" <?=$user['data']['denied_phone_num'] == true ? 'checked' : '' ;?> class="my-2 mx-4" name = "phone_nums" style = "width:30px;height:30px;">   
                                </div>
                                </div>
                                <div class="col-md-3">
                                <div class="mb-3">
                                    <label > Permit </label>
                                    <br/>
                                    <input type="checkbox" <?=$user['data']['denied_upload_permit'] == true ? 'checked' : '' ;?>  class="my-2 mx-4" name = "permit" style = "width:30px;height:30px;">   
                                </div>
                                </div>
                                <div class="col-md-3">
                                <div class="mb-3">
                                    <label > Landmark </label>
                                    <br/>
                                    <input type="checkbox" <?=$user['data']['denied_landmark'] == true ? 'checked' : '' ;?>  class="my-2 mx-4" name = "Landmark" style = "width:30px;height:30px;">   
                                </div>
                                </div>
                                <div class="col-md-3">
                                <div class="mb-3">
                                    <label > Street </label>
                                    <br/>
                                    <input type="checkbox" <?=$user['data']['denied_barangay'] == true ? 'checked' : '' ;?> class="my-2 mx-4" name = "Barangay" style = "width:30px;height:30px;">   
                                </div>
                                </div>
                                <div class="col-md-3">
                                <div class="mb-3">
                                    <label > Remarks </label>
                                    <br/>
                                    <input type="checkbox" <?=$user['data']['denied_remarks'] == true ? 'checked' : '' ;?>  class="my-2 mx-4" name = "remarks" style = "width:30px;height:30px;">   
                                </div>
                                </div>
                                <div class="col-md-3">
                                <div class="mb-3">
                                    <label > To </label>
                                    <br/>
                                    <input type="checkbox" <?=$user['data']['denied_inspection_name'] == true ? 'checked' : '' ;?> class="my-2 mx-4" name = "inspection_name" style = "width:30px;height:30px;">   
                                </div>
                                </div>
                                <div class="col-md-3">
                                <div class="mb-3">
                                    <label > Proceed </label>
                                    <br/>
                                    <input type="checkbox" <?=$user['data']['denied_proceed_info'] == true ? 'checked' : '' ;?> class="my-2 mx-4" name = "proceed_info" style = "width:30px;height:30px;">   
                                </div>
                                </div>
                                <div class="col-md-3">
                                <div class="mb-3">
                                    <label > Purpose </label>
                                    <br/>
                                    <input type="checkbox" <?=$user['data']['denied_purpose_info'] == true ? 'checked' : '' ;?> class="my-2 mx-4" name = "purpose_info" style = "width:30px;height:30px;">   
                                </div>
                                </div>
                                <div class="col-md-3">
                                <div class="mb-3">
                                    <label > Duration </label>
                                    <br/>
                                    <input type="checkbox" <?=$user['data']['denied_duration'] == true ? 'checked' : '' ;?> class="my-2 mx-4" name = "duration" style = "width:30px;height:30px;">   
                                </div>
                                </div>
                                <div class="col-md-3">
                                <div class="mb-4">
                                    <label > Remarks_IO </label>
                                    <br/>
                                    <input type="checkbox" <?=$user['data']['denied_remarks_IO'] == true ? 'checked' : '' ;?> class="my-2 mx-4" name = "remarks_io" style = "width:30px;height:30px;">   
                                </div>
                                </div>
                                </div>

                                    <div class="col-md-3">
                                <div class="mb-3">
                                    <button type = "submit" name = "updateDeniedinc" class="btn btn-dark"> Update </button>
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


<?php include('includes/scripts.php'); ?>