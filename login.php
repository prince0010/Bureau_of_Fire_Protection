
<?php 
$pageTitle = "BFP || Login";
include('inc/header.php');

if(isset($_SESSION['auth']))
{
    redirect('./client/index.php', 'You are already logged in,');
}

?>
        
        <div class="py-4 bg-secondary text-center">
            <h4 class="text-white">  </div>
        </div>

        <div class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4 ">                    
                        <div class="card shadow-sm " style="margin-top: 20%;">
                            <div class="card-header">
                                <h4 class="text-center">Login</h4>
                            </div>
                            <div class="card-body">
                                <?php alertMessage(); ?>
                                
                                <form action="login-func.php" method = "POST">
                                    <div class="mb-3">
                                        <label for=""> Email</label>
                                        <input type="email" name = "email" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label for=""> Password</label>
                                        <input type="password" name = " password" class="form-control">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <button type= "submit" name = "loginBtn" class="btn btn-dark w-100"> Login </button>
                                    </div>

                                    <div class="mb-3">
                                        <a href="sign_up.php">Create an Account?</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include('inc/footer.php'); ?>
<!-- include('./client/includes/footer.php') -->