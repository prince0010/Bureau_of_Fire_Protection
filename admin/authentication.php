<?php

    // Check session if auth if logged in or not
    if(isset($_SESSION['auth']))
    {
        // Set if the role is set or not since $_SESSION['loggedInUserRole'] is equals to the $row['role'] in the login_func we set the loggedInUserRole as a container for $row['role'] in the DB
        if(isset($_SESSION['loggedInUserRole']))
        {
            $role = validate($_SESSION['loggedInUserRole']);
            $email  = validate($_SESSION['loggedInUser']['email']);

            // Need og email na gikan sa database og kwaon ang role dayon ato so nag base sa username na including iyang role pag sa authentication of users na dayon.
            $query = "SELECT * FROM user WHERE email = '$email' AND role= '$role' LIMIT 1";
            $result = mysqli_query($conn, $query);

            if($result){
                // Checking if there is one data that inside of it or logged in
                if(mysqli_num_rows($result) == 0){

                    // function logoutSession
                    logoutSession();
                    redirect('../login.php', 'Access Denied.', 'danger');
                }

                // if result is not found then redirect back
                else
                {
                    // Insiide of this function, pass this ($result) and get the data in MYSQLI_ASSOC or mysqli associate data 
                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    if($row['role'] != 'Admin')
                    { 
                        if($row['is_ban'] == 1)
                        {
                            logoutSession();
                            redirect('../login.php', 'Your Account is Banned.', 'danger' );
                        }
                        logoutSession();
                        redirect('../login.php', 'Access Denied', 'danger');
                    }
            }
            }
            else
            {
                   // function logoutSession
                   logoutSession();
                   redirect('../login.php', 'Something Went Wrong!', 'danger');
            }
        }
    }
    else{
        
           redirect('../login.php', 'Login to Access', 'danger');
    }


?>