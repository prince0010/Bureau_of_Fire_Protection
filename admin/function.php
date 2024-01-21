<?php
        require '../config/function.php';

    //Admin Confirm
    if(isset($_POST['adminConf'])){

    }

    //Message
    if(isset($_POST['msgSave'])){
        $message = validate($_POST['message']);
        $status = validate($_POST['status']);

        $query = "INSERT INTO message (message, status) VALUES ('$message', '$status')";
        $result = mysqli_query($conn, $query);

        if($result){
            redirect('message_panel.php', 'SMS Message Data Successfully Updated');
        }
        else
        {
            redirect('add_smsmessage.php', 'Something Went Wrong!');

        }
    }


    //Remarks
    if(isset($_POST['updateRemarks'])){
        $remarks = validate($_POST['remarks']);

        $id = validate($_POST['remarksId']);

          // VERIFICATION AND CHECKING
        // Checking if the ID is existed or created and if not then it will display the status 404 or 500 in this function thartt you can find in config/function.php
        // Database TableName of the specific ID that you want to check if its existed or created and the ID
        $userID = getByID('remarks', $id);
        // If the status is not equals to 200 that you can find in this getByID function in config/function.php
        if($userID['status'] != 200) {
            redirect('edit_remarks.php?id='.$id, 'No such ID is Recorded in Database. ', 'danger');
        }
        if($remarks != '')
        {
            $query = "UPDATE remarks SET 
            remarks = '$remarks'
            WHERE id = '$id' ";

            $result = mysqli_query($conn, $query);
            if($result)
            {
                redirect('remarks_panel.php?id='.$id, 'Remarks Data Updated Successfully');
            }
            else{
                redirect('edit_remarks.php', 'Something Went Wrong. ', 'danger');
            }
        }
        else{
                redirect('edit_remarks.php', 'Please fill up all the Input Field', 'danger');
        }
    }

    // duration
    if(isset($_POST['updateDuration'])){
        $duration = validate($_POST['duration']);

        $id = validate($_POST['durationId']);

        // VERIFICATION AND CHECKING
        // Checking if the ID is existed or created and if not then it will display the status 404 or 500 in this function thartt you can find in config/function.php
        // Database TableName of the specific ID that you want to check if its existed or created and the ID
        $userID = getByID('duration', $id);
        // If the status is not equals to 200 that you can find in this getByID function in config/function.php
        if($userID['status'] != 200) {
            redirect('edit_duration.php?id='.$id, 'No such ID is Recorded in Database. ', 'danger');
        }
        if($duration != '')
        {
            $query = "UPDATE duration SET 
            duration = '$duration'
            WHERE id = '$id' ";

            $result = mysqli_query($conn, $query);
            if($result)
            {
                redirect('duration_panel.php?id='.$id, 'Duration Data Updated Successfully');
            }
            else{
                redirect('edit_duration.php', 'Something Went Wrong. ', 'danger');
            }
        }
        else{
                redirect('edit_duration.php', 'Please fill up all the Input Field', 'danger');
        }
    }


    // Purpose
    if(isset($_POST['editPurpose'])){
        $purpose = validate($_POST['purpose']);

        $id = validate($_POST['purposeId']);
          // VERIFICATION AND CHECKING
        // Checking if the ID is existed or created and if not then it will display the status 404 or 500 in this function thartt you can find in config/function.php
        // Database TableName of the specific ID that you want to check if its existed or created and the ID
        $userID = getByID('purpose', $id);
        // If the status is not equals to 200 that you can find in this getByID function in config/function.php
        if($userID['status'] != 200) {
            redirect('edit_purpose.php?id='.$id, 'No such ID is Recorded in Database. ', 'danger');
        }
        if($purpose != '')
        {
            $query = "UPDATE purpose SET 
            purpose = '$purpose'
            WHERE id = '$id' ";

            $result = mysqli_query($conn, $query);

            if($result)
            {
                redirect('purpose_panel.php?id='.$id, 'Purpose Data Updated Successfully');
            }
            else{
                redirect('edit_purpose.php', 'Something Went Wrong. ', 'danger');
            }
        }
        else{
                redirect('edit_purpose.php', 'Please fill up all the Input Field', 'danger');
        }
    }
        
    // Update Inspector
    if(isset($_POST['updateInspector'])){
        $name = validate($_POST['name']);
        $position = validate($_POST['position']);
       
        $id = validate($_POST['inspectorId']);
        // VERIFICATION AND CHECKING
        // Checking if the ID is existed or created and if not then it will display the status 404 or 500 in this function thartt you can find in config/function.php
        // Database TableName of the specific ID that you want to check if its existed or created and the ID
        $userID = getByID('inspector_user', $id);
        // If the status is not equals to 200 that you can find in this getByID function in config/function.php
        if($userID['status'] != 200) {
            redirect('edit_inspector.php?id='.$id, 'No such ID is Recorded in Database. ', 'danger');
        }
        if($name != '' && $position != '')
        {
            $query = "UPDATE inspector_user SET 
            name = '$name', 
            position = '$position'
            WHERE id = '$id' ";

            $result = mysqli_query($conn, $query);

            if($result)
            {
                redirect('inspector_panel.php?id='.$id, 'Inspector Data Updated Successfully');
            }
            else{
                redirect('edit_inspector.php', 'Something Went Wrong. ', 'danger');
            }
        }
        else{
                redirect('edit_inspector.php', 'Please fill up all the Input Field', 'danger');
        }
    }

      
        //Remarks

         //Duration
    if(isset($_POST['addRemarks'])){
        $remarks = validate($_POST['remarks']);

        $query = "INSERT INTO remarks (remarks) VALUES ('$remarks')";
        $result = mysqli_query($conn, $query);

        if($result){
            redirect('remarks_panel.php', 'Remarks Data Successfully Updated');
        }
        else
        {
            redirect('add_remarks.php', 'Something Went Wrong!');

        }
    }

        
    //Duration
    if(isset($_POST['addDuration'])){
        $duration = validate($_POST['duration']);

        $query = "INSERT INTO duration (duration) VALUES ('$duration')";
        $result = mysqli_query($conn, $query);

        if($result){
            redirect('duration_panel.php', 'Duration Data Successfully Updated');
        }
        else
        {
            redirect('add_duration.php', 'Something Went Wrong!');

        }
    }


    //purpose
    if(isset($_POST['addpurpose'])){
        $purpose = validate($_POST['purpose']);


        $query = "INSERT INTO purpose (purpose) VALUES('$purpose')";
        $result = mysqli_query($conn, $query);

        if($result){
            redirect('purpose_panel.php', 'Purpose Data Successfully Updated');
        }
        else
        {
            redirect('add_purpose.php', 'Something Went Wrong!');

        }
    }
    //Barangay
    if(isset($_POST['addBarangay'])){
        $barangay = validate($_POST['barangay']);

        $query = "INSERT INTO barangay (barangay_name) VALUES('$barangay')";
        $result = mysqli_query($conn, $query);

        if($result){
            redirect('barangay_panel.php', 'Barangay Data Successfully Updated');
        }
        else
        {
            redirect('barangay_panel.php', 'Something Went Wrong!');

        }
    }

    // Inspector
    if(isset($_POST['addInspector']))
    {
        $name = validate($_POST['name']);
        $position = validate($_POST['position']);
      
        $query = "INSERT INTO inspector_user (inspection_name, position) VALUES ('$name', '$position')";
        $result = mysqli_query($conn, $query);

        if($result){
            redirect('inspector_panel.php', 'Inspector Data Successfully Updated');
        }
        else
        {
            redirect('add_inspector.php', 'Something Went Wrong!');

        }
    }




    //Save Settings
    if(isset($_POST['saveSettings']))
        {
        $title = validate($_POST['title']);
        $domain = validate($_POST['domain']);

        $sdescription = validate($_POST['sdescription']);

        $mdescription = validate($_POST['mdescription']);
        $mkeyword = validate($_POST['mkeyword']);

        $email1 = validate($_POST['email1']);
        $email2 = validate($_POST['email2']);

        $phone1 = validate($_POST['phone1']);
        $phone2 = validate($_POST['phone2']);

        $address = validate($_POST['address']);
        $web_name = validate($_POST['web_name']);

        $settingID = validate($_POST['settingID']);

        // if($title != '' && $domain != '' && $sdescription != '' && $mdescription != '' && $mkeyword != '' && 
        // $email1 != '' && $email2 != '' && $phone1 != '' && $phone2 != '' && $address != '') 
        if($settingID == 'insert')
        {
            $query = "INSERT INTO settings (title, web_name, domain, sdescription, mdescription, mkeyword, email1, email2, phone1, phone2, address )
             VALUES ('$title','$web_name','$domain','$sdescription','$mdescription','$mkeyword','$email1','$email2','$phone1','$phone2','$address' )";
            $result = mysqli_query($conn, $query);

            if($result){
                redirect('setting.php', 'Setting Successfully Updated');
            }
            else
            {
                redirect('setting.php', 'Something Went Wrong!');
    
            }
        }
        // If naa nay data sa database na settings table 
        // if the ID is number then it calls the settingID
       if(is_numeric($settingID))
       {
            $query = "UPDATE settings SET 
            title = '$title', 
            domain = '$domain', 
            sdescription = '$sdescription',
            mdescription = '$mdescription',
            mkeyword = '$mkeyword',
            email1 = '$email1',
            email2  = '$email2',
            phone1 = '$phone1',
            phone2 = '$phone2',
            address = '$address',
            web_name = '$web_name'
             WHERE id = '$settingID' ";

            $result = mysqli_query($conn, $query); 

            if($result){
                redirect('setting.php', 'Setting Successfully Updated');
            }
            else
            {
                redirect('setting.php', 'Something Went Wrong!');
    
            }
       }

      

        } 


    if(isset($_POST['addUser']))
    {
        $name = validate($_POST['name']);
        $email = validate($_POST['email']);
        $password = validate($_POST['password']);
        $phone = validate($_POST['phone']);
        $address = validate($_POST['address']);
        $is_ban = validate($_POST['is_ban']) == true ? 1 : 0 ;
        $role = validate($_POST['role']);

        if($name != '' && $email != '' && $password != '' && $phone != '' && $address != '')
        {
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            
            $query = "INSERT INTO user(name, phone_num, address, email, password, is_ban, role) 
            VALUES ('$name',' $phone', '$address' ,'$email','$hashedPassword','$is_ban','$role')";
            $result = mysqli_query($conn, $query);

            if($result)
            {
                redirect('users.php', 'User/Admin Added Successfully');
            }
            else{
                redirect('add_users.php', 'Something Went Wrong. ', 'danger');
            }

        }
        else{
                redirect('add_users.php', 'Please fill up all the Input Field', 'danger');
        }

    }


//    Update User Function
    if(isset($_POST['updateUser'])){

        $name = validate($_POST['name']);
        $email = validate($_POST['email']);
        $password = validate($_POST['password']);
        $phone = validate($_POST['phone']);
        $address = validate($_POST['address']);
        $is_ban = validate($_POST['is_ban']) == true ? 1 : 0 ;
        
        $role = validate($_POST['role']);
        
        $id = validate($_POST['userId']);
        // VERIFICATION AND CHECKING
        // Checking if the ID is existed or created and if not then it will display the status 404 or 500 in this function thartt you can find in config/function.php
        // Database TableName of the specific ID that you want to check if its existed or created and the ID
        $userID = getByID('user', $id);
        // If the status is not equals to 200 that you can find in this getByID function in config/function.php
        if($userID['status'] != 200) {
            redirect('edit_users.php?id='.$id, 'No such ID is Recorded in Database. ', 'danger');
        }
        if($name != '' && $email != '' && $password != '' && $phone != '' && $address != '')
        {
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            $query = "UPDATE user SET 
            name = '$name', 
            phone_num = '$phone',
            address = '$address', 
            email = '$email', 
            password = '$hashedPassword', 
            is_ban = '$is_ban', 
            role = '$role'
            WHERE id = '$id' ";


            $result = mysqli_query($conn, $query);

            if($result)
            {
                redirect('users.php?id='.$id, 'User/Admin Updated Successfully');
            }
            else{
                redirect('edit_users.php', 'Something Went Wrong. ', 'danger');
            }

        }
        else{
                redirect('edit_users.php', 'Please fill up all the Input Field', 'danger');
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
                redirect('inspection_order.php?id='.$id, 'Select Denied Done');
            }
            else{
                redirect('inspection_order.php', 'Something Went Wrong. ', 'danger');
            }
        }

       
        
    // Save Service

    if(isset($_POST['save_service']))
    {
        $serv_name = validate($_POST['name']);

        // so here is we will replace the space blank to a dash '-' and we will start to lowercase on the service name
        $slug = str_replace('', '-', strtolower($serv_name));

        $small_desc = validate($_POST['small_desc']);
        $long_desc = validate($_POST['long_desc']); 

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

            $path = "../assets/uploads/services/";
            
            $img_extension = pathinfo($service_img, PATHINFO_EXTENSION);

            $filename = time().'.'.$img_extension;

            $finalImage = '../assets/uploads/services/'.$filename;

        }
        else
        {
            $finalImage = NULL;
        }
        // IMAGE UPLOAD END
       
        $meta_title = validate($_POST['meta_title']);
        $meta_description = validate($_POST['meta_description']);
        $meta_keyboard = validate($_POST['meta_keyboard']);

        $status = validate($_POST['status'] == true ? '1' : '0');

        $query = "INSERT INTO services (serv_name,slug,small_desc,long_desc,service_img,meta_title,meta_description,meta_keyboard,status)
         VALUES ('$serv_name','$slug','$small_desc','$long_desc','$finalImage','$meta_title','$meta_description','$meta_keyboard','$status')";

        $result = mysqli_query($conn, $query); 

        if($result){
            // If we dont upload the image so what in that case
        if($_FILES['image']['size'] > 0){
            // /if its coming, image has been uploaded then only move the image else continue to the redirect(add_service.php)
            // Move the uploaded images in the $path
            move_uploaded_file($_FILES['image']['tmp_name'], $path.$filename);
        }
            redirect('add_services.php', 'Services Added Successfully ');

        }
        else{
            redirect('add_services.php', 'Something Went Wrong. ', 'danger');

        }
    }

    if(isset($_POST['update_service']))
    {
        $serv_id = validate($_POST['service_Id']);
        $serv_name = validate($_POST['name']);

        // so here is we will replace the space blank to a dash '-' and we will start to lowercase on the service name
        $slug = str_replace('', '-', strtolower($serv_name));

        $small_desc = validate($_POST['small_desc']);
        $long_desc = validate($_POST['long_desc']); 

        // IMAGE UPLOAD START
        // Check if the image is uploaded or not

        $service = getByID('services',$serv_id);
        

        if($_FILES['image']['size'] > 0){

            $service_img = $_FILES['image']['name'];

            // extension in img like jpg, png and etc
            $ImgFileTypes = strtolower(pathinfo($service_img, PATHINFO_EXTENSION)); 

            if($ImgFileTypes != 'jpg' && $ImgFileTypes != 'jpeg' && $ImgFileTypes != 'png')
            {
                // If it doesn't matches then it will redirect back
            redirect('add_services.php', 'Sorry only jpg, jpeg and png Format Only. ', 'danger');

            }
            $path = "../assets/uploads/services/";

            // Only one move in folder in order to get into assets
            $deleteImage = "./".$service['data']['service_img'];
            if(file_exists($deleteImage))
            {
                unlink($deleteImage);
            }

          
            
            $img_extension = pathinfo($service_img, PATHINFO_EXTENSION);

            $filename = time().'.'.$img_extension;

            $finalImage = '../assets/uploads/services/'.$filename;

        }
        else
        {
            $finalImage = $service['data']['service_img'];
        }
        // IMAGE UPLOAD END
       
        $meta_title = validate($_POST['meta_title']);
        $meta_description = validate($_POST['meta_description']);
        $meta_keyboard = validate($_POST['meta_keyboard']);

        $status = validate($_POST['status'] == true ? '1' : '0');


        $query = "UPDATE services SET 
       serv_name = '$serv_name',
       slug = '$slug',
       small_desc = '$small_desc',
       long_desc = '$long_desc',
       service_img = '$finalImage',
       meta_title = '$meta_title',
       meta_description = '$meta_description',
       meta_keyboard = '$meta_keyboard',
       status = '$status'
       WHERE id = '$serv_id'
        ";
        $result = mysqli_query($conn, $query);
        
         if($result){
            // If we dont upload the image so what in that case
        if($_FILES['image']['size'] > 0){
            // /if its coming, image has been uploaded then only move the image else continue to the redirect(add_service.php)
            // Move the uploaded images in the $path
            move_uploaded_file($_FILES['image']['tmp_name'], $path.$filename);
        }  // Change the ID by Dynamic or kung unsa nag ID na set ani na form
            redirect('edit_services.php?id='.$serv_id, 'Services Update Successfully');

        }
        else{
              // Change the ID by Dynamic or kung unsa nag ID na set ani na form
            redirect('edit_services.php?id='.$serv_id, 'Something Went Wrong. ', 'danger');

        }
    }

?>