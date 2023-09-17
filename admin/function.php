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
                redirect('add_users.php', 'Something Went Wrong.');
            }

        }
        else{
                redirect('add_users.php', 'Please fill up all the Input Field');
        }

    }
    else{

    }

?>