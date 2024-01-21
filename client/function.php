

<?php

require '../config/function.php';



if(isset($_POST['updateRequest'])){

    $inspectId = validate($_POST['requestId']);
    $ownername = validate($_POST['owner_name']);
    $businessname = validate($_POST['b_name']);
    $datetime_local = validate($_POST['datetime_local']);
    $phone_num = validate($_POST['phone_num']);
   
    $request = getByID('request', $inspectId);
    if($_FILES['image']['size'] > 0){

        $service_img = $_FILES['image']['name'];
        // extension in img like jpg, png and etc
        $ImgFileTypes = strtolower(pathinfo($service_img, PATHINFO_EXTENSION)); 

        if($ImgFileTypes != 'jpg' && $ImgFileTypes != 'jpeg' && $ImgFileTypes != 'png')
        {
            // If it doesn't matches then it will redirect back
        redirect('index.php', 'Sorry only jpg, jpeg and png Format Only. ', 'danger');

        }
        $path = "../assets/uploads/form_request/";

        $deleteImage = "../".$request['data']['image'];

        if(file_exists($deleteImage))
        {
            unlink($deleteImage);
        }

        $img_extension = pathinfo($service_img, PATHINFO_EXTENSION);
        $filename = time().'.'.$img_extension;
        $finalImage = '../assets/uploads/form_request/'.$filename;

    }
    else
    {
        $finalImage = $request['data']['image'];
    }

    $barangay = validate($_POST['barangay']);
    $address = validate($_POST['address']);
    $landmark = validate($_POST['landmark']);
    $remark = validate($_POST['remarks']);
    

    // $query = "INSERT INTO inspection_order (inspection_name, proceed_info, purpose_info, duration, remarks, inspection_userid) 
    // VALUES ('$insector_name', '$proceed', '$purpose', '$duration', '$remarks', '$inspectId')";
    $query = "UPDATE request SET 
            owner_name = '$ownername',
            business_name = '$businessname',
            address = '$address',
            phone_num = '$phone_num',
            upload_permit = '$finalImage',
            date = ' $datetime_local',
            landmark = '$landmark',
            remarks = ' $remark',
            status = '4',
            updated_status = '1'
            WHERE id = '$inspectId' ";

    $result = mysqli_query($conn, $query);
    if($result){
            if($_FILES['image']['size'] > 0){
                move_uploaded_file($_FILES['image']['tmp_name'], $path.$filename);
            }
   

        if($address == '' && $landmark == '' && $remark = ''){
            redirect('edit_request.php?id=' .$inspectId, 'Please Check! You forgot to Fill up some of it', 'danger');
        }
        elseif($result){
            redirect('index.php', 'Updated Data Successfully!');
        }
        else
        {
            redirect('edit_request.php', 'Something Went Wrong! Try Filling up Again!');
    
        }
    }
    }

?>