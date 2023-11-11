<?php

    require '../config/function.php';

    $paraResult = checkParamId('id');
    if(is_numeric($paraResult)){

        $serviceId = validate($paraResult);

        $services = getByID('duration', $serviceId);

        if($services['status'] == 200){

            $serviceDeleteRes = deleteQuery('duration', $serviceId);
            if($serviceDeleteRes)
            {
                 // Only one move in folder in order to get into assets

                redirect('duration_panel.php', 'Duration Data Deleted Successfully');
            }
            else{
                redirect('duration_panel.php', 'Something Went Wrong');
            }
        }
        else{
            redirect('duration_panel.php', 'Something Went Wrong');
        }
    }
    else{
        redirect('duration_panel.php', $paraResult);
    }



?>