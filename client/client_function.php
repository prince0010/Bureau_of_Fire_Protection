
<?php

    require '../config/function.php';


    if(isset($_POST['formRequest']))
    {

        $name = validate($_POST['name']);
        $b_name = validate($_POST['b_name']);
        $date = validate($_POST['date']);
        $phone = validate($_POST['phone']);

        // IMAGE UPLOAD START
        // Check if the image is uploaded or not
        if($_FILES['image']['size'] > 0){

            $service_img = $_FILES['image']['name'];

            // extension in img like jpg, png and etc
            $ImgFileTypes = strtolower(pathinfo($service_img, PATHINFO_EXTENSION)); 

            if($ImgFileTypes != 'jpg' && $ImgFileTypes != 'jpeg' && $ImgFileTypes != 'png')
            {
                // If it doesn't matches then it will redirect back
            redirect('add_services.php', 'Sorry only jpg, jpeg and png Format Only. ', 'danger');

            }

            $path = "../assets/uploads/form_request/";
            
            $img_extension = pathinfo($service_img, PATHINFO_EXTENSION);

            $filename = time().'.'.$img_extension;

            $finalImage = '../assets/uploads/form_request/'.$filename;

        }
        else
        {
            $finalImage = NULL;
        }
            // IMAGE UPLOAD END

            $address = validate($_POST['address']);
            $landmark = validate($_POST['landmark']);
            $barangay = validate($_POST['barangay']);
            $remarks = validate($_POST['remarks']);
    
            $query = "INSERT INTO request (
             owner_name,
             business_name,
             address,
             phone_num,
             upload_permit,
             date,
             landmark,
             barangay,
             remarks)
             VALUES(
            '$name',
            '$b_name',
            '$address',
            '$phone',
            '$finalImage',
            '$date',
            '$landmark',
            '$barangay', 
            '$remarks'
            )";

        $result = mysqli_query($conn, $query); 

        if($result){
            // If we dont upload the image so what in that case
        if($_FILES['image']['size'] > 0){
            // /if its coming, image has been uploaded then only move the image else continue to the redirect(add_service.php)
            // Move the uploaded images in the $path
            move_uploaded_file($_FILES['image']['tmp_name'], $path.$filename);
        }
            redirect('form_request.php', 'Form Request Added Successfully ');

        }
        else{
            redirect('form_request.php', 'Something Went Wrong. ', 'danger');

        }
    }

?>

