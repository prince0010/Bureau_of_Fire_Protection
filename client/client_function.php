
<?php

    require '../config/function.php';


    if(isset($_POST['formRequest']))
    {

        $name = validate($_POST['name']);
        $b_name = validate($_POST['b_name']);
        $date = validate($_POST['date']);
        $phone = validate($_POST['phone']);
        // Image upload
        if($_FILES['image']['size'] > 0)
        {
            $permit_img = $_FILES['image']['name'];
           
             // extension in img like jpg, png and etc
          $PermitFileTypes = strtolower(pathinfo($permit_img, PATHINFO_EXTENSION)); 
         

        if($PermitFileTypes != 'jpg' && $PermitFileTypes != 'jpeg' && $PermitFileTypes != 'png')
        {
            redirect('form_request.php', 'Sorry only jpg, jpeg and png Format Only. ', 'danger');
        }
        
            $path = "../assets/uploads/form_request/";
        
            $permit_extension = pathinfo($permit_img, PATHINFO_EXTENSION);
    
            $permitfilename = time().'.'.$permit_extension;
    
            $permitfinalImage = '../assets/uploads/form_request/'.$permitfilename;
        }
        else
        {
            $permitfinalImage = NULL;
        }
        
        // IMAGE UPLOAD END

        $address = validate($_POST['address']);
        $landmark = validate($_POST['landmark']);

        $query = "INSERT INTO request (
         owner_name,
         business_name,
         address,
         phone_num,
         upload_permit,
         date,
         landmark,
         location_pic)
         VALUES(
        '$name',
        '$b_name',
        '$address',
        '$phone',
        '$permitfinalImage',
        '$date',
        '$landmark'
        )";
        $result = mysqli_query($conn, $query);

        if($result)
        {
            if($_FILES['image']['size'] && $_FILES['images']['size'] > 0){
                // /if its coming, image has been uploaded then only move the image else continue to the redirect(add_service.php)
                // Move the uploaded images in the $path
                move_uploaded_file($_FILES['image']['tmp_name'], $path.$permitfilename);
            }
                redirect('form_request.php', 'Form Request Added Successfully ');
        
            }
            else{
                redirect('form_request.php', 'Something Went Wrong. ', 'danger');
        
            }
    
        }

?>

