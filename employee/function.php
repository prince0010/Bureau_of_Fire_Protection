
<?php

require '../config/function.php';

    if(isset($_POST['sendBtn'])){
        $req_id = validate($_POST['request_Id']);

        $query = "UPDATE request SET
        msg_send = '1'
        WHERE 
        id = '$req_id'
          ";
          $result = mysqli_query($conn, $query);
          if($result){
            redirect('inspection_order.php', 'SMS Message Sent. ');
        }
        else{
            redirect('sms_notification.php?='.$req_id, 'Something Went Wrong. ', 'danger');

        }
    }

?>