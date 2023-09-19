<?php
        require '../config/function.php';

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
            
            $query = "INSERT INTO users(name, phone_num, email, password, is_ban, role) 
            VALUES ('$name',' $phone','$email','$password','$is_ban','$role')";
            $result = mysqli_query($conn, $query);

            if($result)
            {
                redirect('users.php', 'User/Admin Added Successfully');
            }
            else{
                redirect('add_users.php', 'Something Went Wrong. ');
            }

        }
        else{
                redirect('add_users.php', 'Please fill up all the Input Field');
        }

    }



   
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
        $userID = getByID('users', $id);
        // If the status is not equals to 200 that you can find in this getByID function in config/function.php
        if($userID['status'] != 200) {
            redirect('edit_users.php?id='.$id, 'No such ID is Recorded in Database. ');
        }
        if($name != '' && $email != '' && $password != '' && $phone != '')
        {
            $query = "UPDATE users SET 
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
                redirect('edit_users.php', 'Something Went Wrong. ');
            }

        }
        else{
                redirect('edit_users.php', 'Please fill up all the Input Field');
        }

    }

?>