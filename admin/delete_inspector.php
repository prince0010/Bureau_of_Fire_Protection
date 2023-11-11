<?php

    require '../config/function.php';

    $paraResult = checkParamId('id');
    if(is_numeric($paraResult)){

        $serviceId = validate($paraResult);

        $services = getByID('inspector_user', $serviceId);

        if($services['status'] == 200){

            $serviceDeleteRes = deleteQuery('inspector_user', $serviceId);
            if($serviceDeleteRes)
            {
                 // Only one move in folder in order to get into assets

                redirect('inspector_panel.php', 'Inspector Data Deleted Successfully');
            }
            else{
                redirect('inspector_panel.php', 'Something Went Wrong');
            }
        }
        else{
            redirect('inspector_panel.php', 'Something Went Wrong');
        }
    }
    else{
        redirect('inspector_panel.php', $paraResult);
    }



?>