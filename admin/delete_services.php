<?php

    require '../config/function.php';

    $paraResult = checkParamId('id');
    if(is_numeric($paraResult)){

        $serviceId = validate($paraResult);

        $services = getByID('services', $serviceId);

        if($services['status'] == 200){

            $serviceDeleteRes = deleteQuery('services', $serviceId);
            if($serviceDeleteRes)
            {
                 // Only one move in folder in order to get into assets
            $deleteImage = "./".$services['data']['service_img'];
            if(file_exists($deleteImage))
            {
                unlink($deleteImage);
            }

                redirect('services.php', 'Service Data Deleted Successfully');
            }
            else{
                redirect('services.php', 'Something Went Wrong');
            }
        }
        else{
            redirect('services.php', $services['message']);
        }
    }
    else{
        redirect('services.php', $paraResult);
    }



?>