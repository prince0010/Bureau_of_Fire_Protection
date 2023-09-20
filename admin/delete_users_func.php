<?php
    
    require '../config/function.php';

    $paraResult = checkParamId('id');
    if(is_numeric($paraResult))
    {
        $userId = validate($paraResult);

        $user = getById('user', $userId);
        if($user['status'] == 200)
        {   
                // If success then delete this id or this part
            $userdelete = deleteQuery('user', $userId);
            if($userdelete)
            {
                redirect('users.php', 'User Deleted Successfully');
            }
            else{
                redirect('users.php', 'Something Went Wrong');
            }
        }
        else
        {
            redirect('users.php', $user['message']);
        }
    }
    else{
        redirect('users.php', $paraResult);
    }

?>