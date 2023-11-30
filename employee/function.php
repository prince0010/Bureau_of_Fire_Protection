<?php

require '../config/function.php';


if(isset($_POST['inspecSave'])){

    $insector_name = validate($_POST['inspector_name']);
    $proceed = validate($_POST['proceed']);
    $purpose = validate($_POST['purpose']);
    $duration = validate($_POST['duration']);
    $remarks = validate($_POST['remarks']);


    $query = "INSERT INTO inspection_order (inspection_name, proceed_info, purpose_info, duration, remarks) 
    VALUES ('$insector_name', '$proceed', '$purpose', '$duration', '$remarks')";
    $result = mysqli_query($conn, $query);

    if($result){
        redirect('index.php', 'Inspection Order Successfully Created');
    }
    else
    {
        redirect('inspection_order.php', 'Something Went Wrong! Try Filling up Again!');

    }


}


?>