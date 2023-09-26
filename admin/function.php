<?php
        require '../config/function.php';
        
        
        
    //Save Settings
    if(isset($_POST['saveSettings']))
        {
        $title = validate($_POST['title']);
        $domain = validate($_POST['domain']);

        $sdescription = validate($_POST['sdescription']);

        $mdescription = validate($_POST['mdescription']);
        $mkeyword = validate($_POST['mkeyword']);

        $email1 = validate($_POST['email1']);
        $email2 = validate($_POST['email2']);

        $phone1 = validate($_POST['phone1']);
        $phone2 = validate($_POST['phone2']);

        $address = validate($_POST['address']);
        $web_name = validate($_POST['web_name']);

        $settingID = validate($_POST['settingID']);

        // if($title != '' && $domain != '' && $sdescription != '' && $mdescription != '' && $mkeyword != '' && 
        // $email1 != '' && $email2 != '' && $phone1 != '' && $phone2 != '' && $address != '') 
        if($settingID == 'insert')
        {
            $query = "INSERT INTO settings (title, domain, sdescription, mdescription, mkeyword, email1, email2, phone1, phone2, address, web_name)
             VALUES ('$title','$domain','$sdescription','$mdescription','$mkeyword','$email1','$email2','$phone1','$phone2','$address', $web_name)";
            $result = mysqli_query($conn, $query);
            if($result){
                redirect('setting.php', 'Setting Successfully Saved');
            }
            else
            {
                redirect('setting.php', 'Something Went Wrong!');
    
            }
        }
        // If naa nay data sa database na settings table 
        // if the ID is number then it calls the settingID
       if(is_numeric($settingID))
       {
            $query = "UPDATE settings SET 
            title = '$title', 
            domain = '$domain', 
            sdescription = '$sdescription',
            mdescription = '$mdescription',
            mkeyword = '$mkeyword',
            email1 = '$email1',
            email2  = '$email2',
            phone1 = '$phone1',
            phone2 = '$phone2',
            address = '$address',
            web_name = '$web_name'
             WHERE id = '$settingID' ";

            $result = mysqli_query($conn, $query); 

            if($result){
                redirect('setting.php', 'Setting Successfully Updated');
            }
            else
            {
                redirect('setting.php', 'Something Went Wrong!');
    
            }
       }

      

        } 


    if(isset($_POST['addUser']))
    {
        $name = validate($_POST['name']);
        $email = validate($_POST['email']);
        $password = validate($_POST['password']);
        $phone = validate($_POST['phone']);
        $is_ban = validate($_POST['is_ban']) == true ? 1 : 0 ;
        $role = validate($_POST['role']);

        if($name != '' && $email != '' && $password != '' && $phone != '')
        {
            
            $query = "INSERT INTO user(name, phone_num, email, password, is_ban, role) 
            VALUES ('$name',' $phone','$email','$password','$is_ban','$role')";
            $result = mysqli_query($conn, $query);

            if($result)
            {
                redirect('users.php', 'User/Admin Added Successfully');
            }
            else{
                redirect('add_users.php', 'Something Went Wrong. ', 'danger');
            }

        }
        else{
                redirect('add_users.php', 'Please fill up all the Input Field', 'danger');
        }

    }


//    Update User Function
    if(isset($_POST['updateUser'])){

        $name = validate($_POST['name']);
        $email = validate($_POST['email']);
        $password = validate($_POST['password']);
        $phone = validate($_POST['phone']);
        $is_ban = validate($_POST['is_ban']) == true ? 1 : 0 ;
        $role = validate($_POST['role']);
        
        $id = validate($_POST['userId']);
        // VERIFICATION AND CHECKING
        // Checking if the ID is existed or created and if not then it will display the status 404 or 500 in this function thartt you can find in config/function.php
        // Database TableName of the specific ID that you want to check if its existed or created and the ID
        $userID = getByID('user', $id);
        // If the status is not equals to 200 that you can find in this getByID function in config/function.php
        if($userID['status'] != 200) {
            redirect('edit_users.php?id='.$id, 'No such ID is Recorded in Database. ', 'danger');
        }
        if($name != '' && $email != '' && $password != '' && $phone != '')
        {
            $query = "UPDATE user SET 
            name = '$name', 
            phone_num = '$phone', 
            email = '$email', 
            password = '$password', 
            is_ban = '$is_ban', 
            role = '$role'
            WHERE id = '$id' ";

            $result = mysqli_query($conn, $query);

            if($result)
            {
                redirect('edit_users.php?id='.$id, 'User/Admin Updated Successfully');
            }
            else{
                redirect('edit_users.php', 'Something Went Wrong. ', 'danger');
            }

        }
        else{
                redirect('edit_users.php', 'Please fill up all the Input Field', 'danger');
        }

    }

    // Save Service

    if(isset($_POST['save_service']))
    {
        $serv_name = validate($_POST['service_name']);
        $small_desc = validate($_POST['small_desc']);
        $long_desc = validate($_POST['long_desc']);

        $service_img = validate($_POST['service_img']);

        $meta_title = validate($_POST['meta_title']);
        $meta_description = validate($_POST['meta_description']);
        $meta_keyboard = validate($_POST['meta_keyboard']);

        $status = validate($_POST['status'] == true ? '1' : '0');

        $query = "INSERT INTO services () VALUES ()";
        $result = mysqli_query($conn, $query);
    }

?>