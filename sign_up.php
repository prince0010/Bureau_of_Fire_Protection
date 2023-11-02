
<?php 
$pageTitle = "BFP || Sign Up";
include('inc/header.php');

if(isset($_SESSION['auth']))
{
    redirect('index.php', 'You are already logged in,');
}

?>
        
        <div class="py-4 bg-secondary text-center">
            <h4 class="text-white"> Sign Up </div>
        </div>

        <div class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4">                    
                        <div class="card shadow-sm">
                            <div class="card-header">
                                <h4>Sign Up</h4>
                            </div>
                            <div class="card-body">
                                <?php alertMessage(); ?>
                                <form action="sign_up-func.php" method = "POST">

                                    <div class="mb-3">
                                        <label for=""> Full Name</label>
                                        <input type="text" name = "name" placeholder = "Enter your Fullname" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label for=""> Phone Number</label>
                                        <input type="text" name = "phone_num" placeholder = "Enter your Phone Number" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label for=""> Address </label>
                                        <input type="text" name = "address" placeholder = "Enter your Address" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label for=""> Email </label>
                                        <input type="email" name = "email" placeholder = "Enter your Email" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label for=""> Password</label>
                                        <input type="password" name = "password" placeholder = "Enter Your Password" class="form-control">
                                    </div>
                                  
                                    <!-- <div class="mb-3">
                                        <label for=""> Confirm Password</label>
                                        <input type="password" name = "confpassword" placeholder = "Enter to Confirm Password" class="form-control">
                                    </div> -->
                                      
                                    <div class="mb-3">
                                    <label hidden="hidden"> Role </label>
                                <select hidden="hidden" name="role" id="" class="form-control" >
                                    <option value="" disabled>-- Select Role -- </option>
                                    <option value= "Client"> User </option>
                                </select>
                                    </div>

                                <div class="mb-3">
                                    <label hidden="hidden" >Is Ban </label>
                                    <input hidden="hidden" type="checkbox" name = "is_ban" style = "width:30px;height:30px;">
                                </div>

                                    <div class="mb-3">
                                        <button type= "submit" name = "signupBtn" class="btn btn-dark w-100"> Login </button>
                                    </div>

                                    <div class="mb-3">
                                        <a href="login.php">Already Have An Account?</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include('./client/includes/footer.php')?>