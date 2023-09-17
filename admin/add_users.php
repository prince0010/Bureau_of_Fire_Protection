<?php 
$pageTitle = 'BFP || Add User';
include('includes/header.php'); ?>

<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> Add User

                        <a href="users.php" class="btn btn-dark float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">

                    <?= alertMessage(); ?>
                    
                <form action="function.php" method = "POST">
                        <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label >Name </label>
                                <input type="text" name = "name" class= "form-control">
                            </div>
                            </div>

                            <div class="col-md-6">
                            <div class="mb-3">
                                <label >Email </label>
                                <input type="text" name = "email" class= "form-control">
                            </div>
        
                            </div>
                            <div class="col-md-6">
                            <div class="mb-3">
                                <label >Password </label>
                                <input type="text" name = "password" class= "form-control">
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="mb-3">
                                <label >Phone Number </label>
                                <input type="text" name = "phone" class= "form-control">
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="mb-5">
                                <label >Select Role </label>
                                <select name="role" id="" class="form-control" >
                                    <option value="" disabled>-- Select Role -- </option>
                                    <option value="admin">Admin</option>
                                    <option value="client">Client</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                        <div class="mb-3">
                            <label >Is Ban </label>
                            <br />
                            <input type="checkbox" name = "is_ban" style = "width:30px;height:30px;">
                        </div>
                        </div>
                        
                        <div class="col-md-6">
                        <div class="mb-3">
                            <button type = "submit" name = "addUser" class="btn btn-dark"> Save </button>
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