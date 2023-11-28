<?php
require '../config/function.php';


        $service= "SELECT * FROM inspection_order";
        $services = mysqli_query($conn, $service);
        if(mysqli_num_rows($services) > 0)
        {
            $options= mysqli_fetch_all($services, MYSQLI_ASSOC);
        }

?>