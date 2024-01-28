<?php

    require '../config/function.php';

    $paraResult = checkParamId('id');
    if(is_numeric($paraResult)){

        $serviceId = validate($paraResult);

        $services = getByID('request', $serviceId);

        if($services['status'] == 200){

            $serviceDeleteRes = deleteQuery('request', $serviceId);
            if($serviceDeleteRes)
            {
                 // Only one move in folder in order to get into assets

                redirect('reports.php', 'Report Data Deleted Successfully');
            }
            else{
                redirect('reports.php', 'Something Went Wrong');
            }
        }
        else{
            redirect('reports.php', 'Something Went Wrong');
        }
    }
    else{
        redirect('reports.php', $paraResult);
    }



?>