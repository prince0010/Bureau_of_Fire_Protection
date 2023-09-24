<?php
session_start();
    require 'dbconn.php';


    function validate($inputData)
    {
        global $conn;
        // trim the first and last data us thee trim function
       $validateData = mysqli_real_escape_string($conn, $inputData);
       return trim($validateData);

    }

    // logout
    function logoutSession()
    {

        
        unset($_SESSION['auth']);
        unset($_SESSION['loggedInUserRole']);
        unset($_SESSION['loggedInUser']);
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
    

    // Failed Message
    function failedMessage()
    {
        if(isset($_SESSION['status']))
        {
            echo '
            <div class = "alert alert-danger">
            <h6>'.$_SESSION['status'].'</h6>
            </div>';
            unset($_SESSION['status']);
        }
    }


    function getAll($tableName)
    {
        global $conn;
        
        $table = validate($tableName);
        $query = "SELECT * FROM $table";
        $result = mysqli_query($conn, $query);
        return $result;
    }


    function checkParamId($paramTypeID)
    {
            // check if the parameter is set or not
        if(isset($_GET[$paramTypeID]))
        {
            if($_GET[$paramTypeID] != null){
              return $_GET[$paramTypeID] ;

            }
            else
            {
                return 'No Id Found';
            }
        }
        else{
            return 'No Id Given';
        }

    }
    
    // This function is useful in further creating records
    function getByID($tableName, $id){

        global $conn;

        // validate any string value = mysqli_real_escape_string
        $table = validate($tableName);
        $id = validate($id);


        $query = "SELECT * FROM $table WHERE id = '$id' LIMIT 1";
        $result = mysqli_query($conn, $query);
        
        if($result)
        {
            if(mysqli_num_rows($result) == 1)
            {

                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $response = [
                    'status' => 200,
                    'message' => 'Fetched Data',
                    'data' => $row
                ];
                return $response;


            }
            else 
            {
                $response = [
                    'status' => 404,
                    'message' => 'No Data Has been Recorded'
                ];
                return $response;
            }

        }
        else 
        {
            $response = [
                'status' => 500,
                'message' => 'Something Went Wrong'
            ];
            return $response;
        }


    }

    // Delete Query Function
    function deleteQuery($tableName, $id)
    {
        // validate ffunction that you can find  in the 1st part to validate the data/s
        $table = validate($tableName);
        $userID = validate($id);

        global $conn;

        $query = "DELETE FROM $table WHERE id = '$userID' LIMIT 1";
        $result = mysqli_query($conn, $query);
        return $result;

    }
?>