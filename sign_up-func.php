<?php
    require './config/function.php';

        // Function to generate random verification code
        


    if(isset($_POST['check_submit_btn'])){
        $email = $_POST['email_id'];
        

        $emailQuery = "SELECT * FROM user WHERE email = '$email' ";
        $email_query_run = mysqli_query($conn, $emailQuery);
        if(mysqli_num_rows($email_query_run) > 0){
           echo "Email Already Taken. Please Try Another one.";
        }
        else{
            echo "This Email is Available.";
         
        }
    }


    if(isset($_POST['signupBtn'])){

        $name = validate($_POST['name']);
        $phone_num = validate($_POST['phone_num']);
        $address = validate($_POST['address']);

        $emailInput = validate($_POST['email']);
        $passwordInput = validate($_POST['password']);
        $confirmPassword = validate($_POST['confpassword']);

        $is_ban = validate($_POST['is_ban']) == true ? 1 : 0 ;
        $role = validate($_POST['role']);
        $newuser = '1';

        // FILTERED EMAIL AND PASSWORD
        $email = filter_var($emailInput, FILTER_SANITIZE_EMAIL);
        $password = filter_var($passwordInput, FILTER_SANITIZE_STRING);


        $emailQuery = "SELECT * FROM user WHERE email = '$email' ";
        $email_query_run = mysqli_query($conn, $emailQuery);
        if(mysqli_num_rows($email_query_run) > 0){
            redirect('sign_up.php', "Email Already Taken. Please Try Another one.", "danger");
        }
        else
        {
        if($password == $confirmPassword){
            
        if($name != '' && $phone_num != '' && $address != '' && $email != '' && $password != '')
        {
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            
            $query = "INSERT INTO user(name, phone_num, address, email, password, is_ban, role, new_user) VALUES ('$name', '$phone_num','$address','$email', '$hashedPassword','$is_ban','$role', '$newuser')";
            $result = mysqli_query($conn, $query);

            if($result)
            {
                
                redirect('login.php', "Created Account Successfully.");
                // redirect('sign_up.php', "Open your Email to Confirm the Verification.");
            }
            else{
                redirect('sign_up.php', "Something Went Wrong", "danger");
            }
        }
        else{
            redirect('sign_up.php', "Please Fill Up Properly", "danger");
        }
    }
    else{
        redirect('sign_up.php', "Does not Match the Password", "danger");
    }
    }
}


?>