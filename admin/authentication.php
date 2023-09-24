<?php

    // Check session if auth if logged in or not
    if(isset($_SESSION['auth']))
    {
        // Set if the role is set or not
        if(isset($_SESSION['loggedInUserRole']))
        {
            $role = validate($_SESSION['loggedInUserRole']);
            $email  = validate($_SESSION['loggedInUser']['email']);

            $query = "SELECT * FROM user WHERE email = '$email' AND role= '$role' LIMIT 1";
            $result = mysqli_query($conn, $query);

            if($result){
                // Checking if there is one data that inside of it or logged in
                if(mysqli_num_rows($result) == 0){

                    // function logoutSession
                    logoutSession();
                    redirect('../client/login.php', 'Access Denied.');
                }

                // if result is not found then redirect back
                else
                {
                    // Insiide of this function, pass this ($result) and get the data in MYSQLI_ASSOC or mysqli associate data 
                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    if($row['role'] != 'Admin' )
                    { 
                        if($row['is_ban'] == 1)
                        {
                            logoutSession();
                            redirect('../client/login.php', 'Your Account is Banned.');
                        }
                        logoutSession();
                        redirect('../client/login.php', 'Access Denied');
                    }
            }
            }
            else
            {
                   // function logoutSession
                   logoutSession();
                   redirect('../client/login.php', 'Something Went Wrong!');
            }
        }
    }
    else{
        
           redirect('../client/login.php', 'Login to Access');
    }


?>