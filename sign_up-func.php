<?php
    require './config/function.php';

    if(isset($_POST['signupBtn'])){

        $name = validate($_POST['name']);
        $phone_num = validate($_POST['phone_num']);
        $address = validate($_POST['address']);

        $emailInput = validate($_POST['email']);
        $passwordInput = validate($_POST['password']);
        $confirmPassword = validate($_POST['confpassword']);

        $is_ban = validate($_POST['is_ban']) == true ? 1 : 0 ;
        $role = validate($_POST['role']);

        // FILTERED EMAIL AND PASSWORD
        $email = filter_var($emailInput, FILTER_SANITIZE_EMAIL);
        $password = filter_var($passwordInput, FILTER_SANITIZE_STRING);
        if($password == $confirmPassword){

        
        if($name != '' && $phone_num != '' && $address != '' && $email != '' && $password != '')
        {
            $query = "INSERT INTO user(name, phone_num, address, email, password, is_ban, role) VALUES ('$name', '$phone_num','$address','$email', '$password','$is_ban','$role')";
            $result = mysqli_query($conn, $query);

            if($result)
            {
                redirect('login.php', "Registered Successfully");
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



?>