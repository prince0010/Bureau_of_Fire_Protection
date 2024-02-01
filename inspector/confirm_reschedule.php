<?php
require '../config/function.php';

if(isset($_POST['resched_data'])){
    
        $id = $_POST['depart_id'];
        $datetime_local = $_POST['datetime_local'];

        $query = "UPDATE request SET 
        datetime_local = '$datetime_local',
        reschedule_update = '1',
        status = '2'
        WHERE id = $id";
        $run = mysqli_query($conn, $query);

        if($run){
            redirect('index.php', 'Schedule Successfully Re-Scheduled');
        }

}


?>