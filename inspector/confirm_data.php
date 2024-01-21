<?php


require '../config/function.php';

if(isset($_POST['confirm_data'])){
        $datetime_local = $_POST['datetime_local'];
        $id = $_POST['durationId'];
        $query = "UPDATE request SET 
        datetime_local = '$datetime_local',
        inspector_sched = '1'
        WHERE id = $id";
        $run = mysqli_query($conn, $query);

        if($run){
            $_SESSION['status'] = "DATE TIME INSERTED SUCCESSFULLY";
            redirect('index.php', 'Scheduled Successfully');
        }

}


?>