
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
                                    <!-- <div class="mb-3">
                                        <label for=""> First Name</label>
                                        <input type="text" name = "fname" placeholder = "Enter your Fullname" class="form-control">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for=""> Last Name</label>
                                        <input type="text" name = "lname" placeholder = "Enter your Fullname" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label for=""> Middle Name</label>
                                        <input type="text" name = "mname" placeholder = "Enter your Fullname" class="form-control">
                                    </div> -->

                                    <div class="mb-3">
                                        <label for=""> Phone Number</label>
                                        <input type="text" name = "phone_num" value = "+63" placeholder = "Enter your Phone Number" class="form-control">
                                        <!-- <input type="tel" id="phone" class = "form-control" value="+63" name="phone" title="Please enter a valid phone number starting with +63 and followed by 10 digits." required>  -->
                                    </div>

                                    <div class="mb-3">
                                        <label for=""> Address </label>
                                        <input type="text" name = "address" placeholder = "Enter your Address" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label for=""> Email </label>
                                        <input type="email" name = "email" placeholder = "Enter your Email" class="form-control check_email">
                                        <strong class="error_email " id ="error_msg" style = "color: black;" ></strong>
                                    </div>

                                    <div class="mb-3">
                                        <label for=""> Password</label>
                                        <input type="password" name = "password" placeholder = "Enter Your Password" class="form-control">
                                    </div>
                                  
                                    <div class="mb-3">
                                        <label for=""> Confirm Password</label>
                                        <input type="password" name = "confpassword" placeholder = "Enter to Confirm Password" class="form-control">
                                    </div>
                                      
                                    <div class="mb-3">
                                    <label hidden="hidden"> Role </label>
                                <select hidden="hidden" name="role" id="" class="form-control" >
                                    <option value="" disabled>-- Select Role -- </option>
                                    <option value= "Client"> User </option>
                                </select>
                                    </div>

                                    <!-- <div class="mb-3">
                                        <label for=""> Verification Code </label>
                                    <input type="text" name = "confpassword" placeholder = "Enter to Verification Code" class="form-control">
                                    <input type="submit" class = "btn btn-dark" name = "verification_code" value="Send Verification Code">
                                    </div> -->

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

        <script> 
$(document).ready(function(){

$('.check_email').keyup(function (e) {

    var email = $('.check_email').val();
    //alert email
    $.ajax({
        type: "POST",
        url: "sign_up-func.php",
        data: {
                "check_submit_btn" : 1,
                "email_id": email,
        },
        success: function(response) {
            // alert(email);
            $('.error_email').text(response);
        }

    });

});
});

</script>
<!-- <script>

function hideMessage() {
    document.getElementById("error_msg").style.display = "none";
};
setTimeout(hideMessage, 10000);
</script> -->
<?php 


include('./client/includes/footer.php');
?>