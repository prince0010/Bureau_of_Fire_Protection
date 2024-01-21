
<?php
    require './config/function.php';


    if(isset($_POST['loginBtn']))
    {
        $emailInput = validate($_POST['email']);
        $passwordInput = validate($_POST['password']);
        
        $email = filter_var($emailInput, FILTER_SANITIZE_EMAIL);
        $password = filter_var($passwordInput, FILTER_SANITIZE_STRING);
  
        if($email != '' && $password != '')
        {
            // $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password' LIMIT 1";
            $query = "SELECT * FROM user WHERE email='$email' LIMIT 1";
            $result = mysqli_query($conn, $query);

            if($result)
            {
                if(mysqli_num_rows($result) == 1)
                {
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    $hashedPassword = substr($row['password'], 0 , 60);
                    if(!password_verify($password, $hashedPassword)){
                          
                        redirect('login.php', "Invalid Password", 'danger');
                    }
             
                    if($row['role'] == 'Admin')
                    {
                        if($row['is_ban'] == 1)
                            {
                                redirect('login.php', "Your Account has been Banned.", 'danger');
                                } 

                                // Authentication using SESSION
                        // Checked if its logged in
                        // Logged in or 'auth' == true
                        $_SESSION['auth'] = true;
                        $_SESSION['loggedInUserRole'] = $row['role'];
                        $_SESSION['loggedInUser'] = [
                            'name' => $row['name'],
                            'email' => $row['email']
                        ];
                        // $_SESSION['success'] = "You have logged in!";

                         $user_id = $row['id'];
                         // Set the default timezone to Asia/Manila (Philippines)
                         date_default_timezone_set('Asia/Manila');
                         // Get the local timezone
                        $login_time = date('Y-m-d H:i:s');
                        $adminsql = "UPDATE user SET logged_in = '$login_time' WHERE id = '$user_id';";
                        $result = mysqli_query($conn, $adminsql);

                        redirect('admin/index.php', "Logged In Successfully");
                        
                        // $user_id = $row['id'];
                        // $login_time = date('Y-m-d H:i:s');
                        // $newsql = "INSERT INTO user (logged_in) VALUES ('$login_time')";
                        // $result = mysqli_query($conn, $sql);
                    }
                    
                    // CLIENT 
                    elseif($row['role'] == 'Client')
                {
                    if($row['is_ban'] == 1)
                    {
                        redirect('login.php', "Your Account has been Banned.", 'danger');
                    }
                      // Authentication using SESSION
                    // Checked if its logged in
                    // Logged in or 'auth' == true
                    $_SESSION['auth'] = true;
                    $_SESSION['loggedInUserRole'] = $row['role'];
                    $_SESSION['loggedInUser'] = [
                        'id' => $row['id'],
                        'name' => $row['name'],
                        'email' => $row['email'],
                        'phone_num' => $row['phone_num'],

                    ];
                    $user_id = $row['id'];
                    // Set the default timezone to Asia/Manila (Philippines)
                    date_default_timezone_set('Asia/Manila');
                    // Get the local timezone
                   $login_time = date('Y-m-d H:i:s');
                   $adminsql = "UPDATE user SET logged_in = '$login_time' WHERE id = '$user_id';";
                   $result = mysqli_query($conn, $adminsql);

                    redirect('client/index.php', "Logged In Successfully");
                }


                // EMPLOYEE
                elseif($row['role'] == 'Employee')
                {
                    if($row['is_ban'] == 1)
                    {
                        redirect('login.php', "Your Account has been Banned.", 'danger');
                    }
                      // Authentication using SESSION
                    // Checked if its logged in
                    // Logged in or 'auth' == true
                    $_SESSION['auth'] = true;
                    $_SESSION['loggedInUserRole'] = $row['role'];
                    $_SESSION['loggedInUser'] = [
                        'id' => $row['id'],
                        'name' => $row['name'],
                        'email' => $row['email'],
                        'phone_num' => $row['phone_num']
                    ];
                    // $_SESSION['success'] = "You have logged in!";
                    
                    $user_id = $row['id'];
                         // Set the default timezone to Asia/Manila (Philippines)
                         date_default_timezone_set('Asia/Manila');
                         // Get the local timezone
                        $login_time = date('Y-m-d H:i:s');
                        $adminsql = "UPDATE user SET logged_in = '$login_time' WHERE id = '$user_id';";
                        $result = mysqli_query($conn, $adminsql);

                    redirect('employee/index.php', "Logged In Successfully");
                  
                }
                elseif($row['role'] == 'Inspector')
                {
                    if($row['is_ban'] == 1)
                    {
                        redirect('login.php', "Your Account has been Banned.", 'danger');
                    }
                      // Authentication using SESSION
                    // Checked if its logged in
                    // Logged in or 'auth' == true
                    $_SESSION['auth'] = true;
                    $_SESSION['loggedInUserRole'] = $row['role'];
                    $_SESSION['loggedInUser'] = [
                        'id' => $row['id'],
                        'name' => $row['name'],
                        'email' => $row['email'],
                        'phone_num' => $row['phone_num']
                    ];
                    // $_SESSION['success'] = "You have logged in!";
                    
                    $user_id = $row['id'];
                         // Set the default timezone to Asia/Manila (Philippines)
                         date_default_timezone_set('Asia/Manila');
                         // Get the local timezone
                        $login_time = date('Y-m-d H:i:s');
                        $adminsql = "UPDATE user SET logged_in = '$login_time' WHERE id = '$user_id';";
                        $result = mysqli_query($conn, $adminsql);

                    redirect('inspector/index.php', "Logged In Successfully");
                  
                }

                else{
                    redirect('login.php', "Something Went Wrong");
                }
                }
                else
                {
                    redirect('login.php', "Email Doesn't Exist! Create an Account!", 'danger');
                }
            }
        }
        else{
            redirect('login.php', "Something Went Wrong", 'danger');
        }
    }
    else{
        redirect('login.php', "All Fields are needed to fill up", 'danger');
    }
    


?>