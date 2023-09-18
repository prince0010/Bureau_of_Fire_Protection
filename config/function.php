<?php
session_start();
    require 'dbconn.php';


    function validate($inputData)
    {
        global $conn;

       return  mysqli_real_escape_string($conn, $inputData);

    }


    function redirect($url, $status)
    {
            $_SESSION['status'] = $status;
            header('Location: '.$url);
            exit(0);

    }

    function alertMessage()
    {
        if(isset($_SESSION['status']))
        {
            echo '
            <div class = "alert alert-success">
            <h6>'.$_SESSION['status'].'</h6>
            </div>';
            unset($_SESSION['status']);
        }
    }
?>