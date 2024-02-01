<?php

require '../config/function.php';


if(isset($_POST['inspecSave'])){
    $inspectId = validate($_POST['inspec_Id']);
    $insector_name = validate($_POST['inspector_name']);
    $datetime_local = date('Y-m-d h:i A', strtotime($_POST['datetime_local']));
    // $datetime_local = validate($_POST['datetime_local']);
    $proceed = validate($_POST['proceed']); 
    $purpose = validate($_POST['purpose']);
    $duration = validate($_POST['duration']);
    $remarks = validate($_POST['remarks']);


    // $query = "INSERT INTO inspection_order (inspection_name, proceed_info, purpose_info, duration, remarks, inspection_userid) 
    // VALUES ('$insector_name', '$proceed', '$purpose', '$duration', '$remarks', '$inspectId')";
    $query = "UPDATE request SET 
            inspection_name = '$insector_name',
            purpose_info = '$purpose',
            proceed_info = '$proceed',
            duration = '$duration',
            remarks_IO = '$remarks',
            datetime_local = '$datetime_local',
            inspector_sched = '1',
            status = '1'
            WHERE id = '$inspectId' ";
   

    $result = mysqli_query($conn, $query);
    if($proceed == '' && $remarks == ''){
        redirect('inspection_order.php?id=' .$inspectId, 'Please Check! You forgot to Fill up some of it', 'danger');
    }
    elseif($result){
        redirect('index.php', 'Inspection Order Successfully Created');
    }
    else
    {
        redirect('inspection_order.php', 'Something Went Wrong! Try Filling up Again!');

    }


}

 // Denied Request
 if(isset($_POST['updateDenied'])){
    $own_name = validate($_POST['owner_name']) == true ? 1 : 0 ;
    $bus_name = validate($_POST['business_name']) == true ? 1 : 0 ;
    $address = validate($_POST['address']) == true ? 1 : 0 ;
    $phone_num = validate($_POST['phone_num']) == true ? 1 : 0 ;
    $permit = validate($_POST['permit']) == true ? 1 : 0 ;
    $Landmark = validate($_POST['Landmark']) == true ? 1 : 0 ;
    $Barangay = validate($_POST['Barangay']) == true ? 1 : 0 ;
    $remarks = validate($_POST['remarks']) == true ? 1 : 0 ;
    $inspection_name = validate($_POST['inspection_name']) == true ? 1 : 0 ;
    $proceed_info = validate($_POST['proceed_info']) == true ? 1 : 0 ;
    $purpose_info = validate($_POST['purpose_info']) == true ? 1 : 0 ;
    $duration = validate($_POST['duration']) == true ? 1 : 0 ;
    $remarks_io = validate($_POST['remarks_io']) == true ? 1 : 0 ;
    
     $id = validate($_POST['userId']);
    $userID = getByID('request', $id);
    
    if($userID['status'] != 200) {
        redirect('confirm_inspection_data.php?id='.$id, 'No such ID is Recorded in Database. ', 'danger');
    }
    
        $query = "UPDATE request SET 
        denied_remarks_IO = '$remarks_io', 
        denied_owner_name = '$own_name',
        denied_business_name = '$bus_name', 
        denied_address = '$address', 
        denied_phone_num = '$phone_num', 
        denied_upload_permit = '$permit', 
        denied_purpose_info = '$purpose_info',
        denied_landmark = '$Landmark',
        denied_barangay = '$Barangay',
        denied_remarks = '$remarks',
        denied_inspection_name = '$inspection_name',
        denied_proceed_info = '$proceed_info',
        denied_duration = '$duration',
        status = '3'
        WHERE id = '$id' ";
          $result = mysqli_query($conn, $query);

        if($result)
        {
            redirect('denied_io.php', 'Select Denied Done');
        }
        else{
            redirect('denied_io.php', 'Something Went Wrong. ', 'danger');
        }
    }


  // Denied Request In Denied IO
  if(isset($_POST['updateDeniedinc'])){
    $own_name = validate($_POST['owner_name']) == true ? 1 : 0 ;
    $bus_name = validate($_POST['business_name']) == true ? 1 : 0 ;
    $address = validate($_POST['address']) == true ? 1 : 0 ;
    $phone_num = validate($_POST['phone_num']) == true ? 1 : 0 ;
    $permit = validate($_POST['permit']) == true ? 1 : 0 ;
    $Landmark = validate($_POST['Landmark']) == true ? 1 : 0 ;
    $Barangay = validate($_POST['Barangay']) == true ? 1 : 0 ;
    $remarks = validate($_POST['remarks']) == true ? 1 : 0 ;
    $inspection_name = validate($_POST['inspection_name']) == true ? 1 : 0 ;
    $proceed_info = validate($_POST['proceed_info']) == true ? 1 : 0 ;
    $purpose_info = validate($_POST['purpose_info']) == true ? 1 : 0 ;
    $duration = validate($_POST['duration']) == true ? 1 : 0 ;
    $remarks_io = validate($_POST['remarks_io']) == true ? 1 : 0 ;
    
     $id = validate($_POST['userId']);
    $userID = getByID('request', $id);
    
    if($userID['status'] != 200) {
        redirect('confirm_inspection_data.php?id='.$id, 'No such ID is Recorded in Database. ', 'danger');
    }
    // if($remarks_io == '1' || $own_name == '1' || $bus_name == '1' || $address == '1' || $phone_num == '1' || $permit == '1' || $purpose_info == '1' || 
    // $Landmark == '1' || $barangay == '1' || $remarks == '1' || $inspection_name == '1' || $proceed_info == '1' || $duration == '1' ){
    //     $query = "UPDATE request SET 
    //     denied_remarks_IO = '$remarks_io', 
    //     denied_owner_name = '$own_name',
    //     denied_business_name = '$bus_name', 
    //     denied_address = '$address', 
    //     denied_phone_num = '$phone_num', 
    //     denied_upload_permit = '$permit', 
    //     denied_purpose_info = '$purpose_info',
    //     denied_landmark = '$Landmark',
    //     denied_barangay = '$Barangay',
    //     denied_remarks = '$remarks',
    //     denied_inspection_name = '$inspection_name',
    //     denied_proceed_info = '$proceed_info',
    //     denied_duration = '$duration'
    //     WHERE id = '$id' ";
    //     $result = mysqli_query($conn, $query);
    // }
    // else{
        $query = "UPDATE request SET 
        denied_remarks_IO = '$remarks_io', 
        denied_owner_name = '$own_name',
        denied_business_name = '$bus_name', 
        denied_address = '$address', 
        denied_phone_num = '$phone_num', 
        denied_upload_permit = '$permit', 
        denied_purpose_info = '$purpose_info',
        denied_landmark = '$Landmark',
        denied_barangay = '$Barangay',
        denied_remarks = '$remarks',
        denied_inspection_name = '$inspection_name',
        denied_proceed_info = '$proceed_info',
        denied_duration = '$duration',
        status = '3'
        WHERE id = '$id' ";
          $result = mysqli_query($conn, $query);
    // }
       
        if($result)
        {
            redirect('denied_io.php', 'Select Denied Done');
        }
        else{
            redirect('denied_io.php', 'Something Went Wrong. ', 'danger');
      }
    }
      

?>