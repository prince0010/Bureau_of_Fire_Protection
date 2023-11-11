<?php

    require '../config/function.php';

    $paraResult = checkParamId('id');
    if(is_numeric($paraResult)){

        $serviceId = validate($paraResult);

        $services = getByID('remarks', $serviceId);

        if($services['status'] == 200){

            $serviceDeleteRes = deleteQuery('remarks', $serviceId);
            if($serviceDeleteRes)
            {
                 // Only one move in folder in order to get into assets

                redirect('remarks_panel.php', 'Remarks Data Deleted Successfully');
            }
            else{
                redirect('remarks_panel.php', 'Something Went Wrong');
            }
        }
        else{
            redirect('remarks_panel.php', 'Something Went Wrong');
        }
    }
    else{
        redirect('remarks_panel.php', $paraResult);
    }



?>