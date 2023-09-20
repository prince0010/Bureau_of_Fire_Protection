<?php 
$pageTitle = 'BFP || Edit User';
include('includes/header.php'); ?>




<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> Edit User

                        <a href="users.php" class="btn btn-dark float-end">Back</a>
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

                            $user = getByID('user',checkParamId('id'));
                            // If its status == 200 then it means they found a data in the database table, its chgecking every data by ID of that datatable
                            if($user['status'] == 200)
                            {
                                ?>
                   <input type="hidden" value =<?=$user['data']['id'];?> name = "userId" required>

                         <div class="row">
                          <div class="col-md-6">
                            <div class="mb-3">
                                <label >Name </label>
                                <input type="text" value =<?=$user['data']['name'];?> name = "name" class= "form-control" required>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="mb-3">
                                        <label >Email </label>
                                        <input type="text" value =<?=$user['data']['email'];?> name = "email" class= "form-control" required>
                                    </div>
                
                                    </div>
                                    <div class="col-md-6">
                                    <div class="mb-3">
                                        <label >Password </label>
                                        <input type="text" value =<?=$user['data']['password'];?> name = "password" class= "form-control" required>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="mb-3">
                                        <label >Phone Number </label>
                                        <input type="text" value =<?=$user['data']['phone_num'];?> name = "phone" class= "form-control" required>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="mb-5">
                                        <label >Select Role </label>
                                        <select name="role" id="" class="form-control"  >
                                            <option value="" disabled>-- Select Role -- </option>
                                            <option value= "Admin" <?=$user['data']['role'] == 'Admin' ? 'selected' : ' ';?> >Admin</option>
                                            <option value= "Client" <?=$user['data']['role'] == 'Client' ? 'selected' : ' ';?> >Client</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <div class="mb-3">
                                    <label >Is Ban </label>
                                    <br />
                                    <input type="checkbox"  <?=$user['data']['is_ban'] == true ? 'checked' : ' ' ;?> name = "is_ban" style = "width:30px;height:30px;">
                                </div>
                                </div>
                                
                                <div class="col-md-6">
                                <div class="mb-3">
                                    <button type = "submit" name = "updateUser" class="btn btn-dark"> Update </button>
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