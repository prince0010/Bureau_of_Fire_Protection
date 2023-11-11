<?php

    require '../config/function.php';

    $paraResult = checkParamId('id');
    if(is_numeric($paraResult)){

        $serviceId = validate($paraResult);

        $services = getByID('purpose', $serviceId);

        if($services['status'] == 200){

            $serviceDeleteRes = deleteQuery('purpose', $serviceId);
            if($serviceDeleteRes)
            {
                 // Only one move in folder in order to get into assets

                redirect('purpose_panel.php', 'Purpose Data Deleted Successfully');
            }
            else{
                redirect('purpose_panel.php', 'Something Went Wrong');
            }
        }
        else{
            redirect('purpose_panel.php', 'Something Went Wrong');
        }
    }
    else{
        redirect('purpose_panel.php', $paraResult);
    }



?>