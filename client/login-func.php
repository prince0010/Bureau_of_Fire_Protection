<?php
    require '../config/function.php';


    if(isset($_POST['loginBtn']))
    {
        $emailInput = validate($_POST['email']);
        $passwordInput = validate($_POST['password']);
        
        $email = filter_var($emailInput, FILTER_SANITIZE_EMAIL);
        $password = filter_var($passwordInput, FILTER_SANITIZE_STRING);

        if($email != '' && $password != '')
        {
            $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password' LIMIT 1";
            $result = mysqli_query($conn, $query);
            if($result)
            {
                if(mysqli_num_rows($result) == 1)
                {
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
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

                        redirect('../admin/index.php', "Logged In Successfully");
                    }
                    elseif($row['role'] == 'Client'){
                        
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

                    redirect('index.php', "Logged In Successfully");
                }
                else{
                    redirect('login.php', "Something Went Wrong");
                }
                }
                else
                {
                    redirect('login.php', "Invalid Email or Password", 'danger');
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