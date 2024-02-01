<?php

    require '../config/function.php';

    $paraResult = checkParamId('id');
    if(is_numeric($paraResult)){

        $serviceId = validate($paraResult);

        $services = getByID('request', $serviceId);
        
        if($services['status'] == 200){

          $query = "UPDATE request SET
          denied_remarks_IO = '0', 
            denied_owner_name = '0',
            denied_business_name = '0', 
            denied_address = '0', 
            denied_phone_num = '0', 
            denied_upload_permit = '0', 
            denied_purpose_info = '0',
            denied_landmark = '0',
            denied_barangay = '0',
            denied_remarks = '0',
            denied_inspection_name = '0',
            denied_proceed_info = '0',
            denied_duration = '0',
            status = '1',
            updated_status = '1'
            WHERE id = '$serviceId' ";

            $req = mysqli_query($conn, $query);
            if($req)
            {
                 // Only one move in folder in order to get into assets

                redirect('inspection_order.php', 'User Data Updated Successfully');
            }
            else{
                redirect('inspection_order.php', 'Something Went Wrong');
            }
        }
        else{
            redirect('inspection_order.php', 'Something Went Wrong');
        }
    }
    else{
        redirect('inspection_order.php', $paraResult);
    }



?>