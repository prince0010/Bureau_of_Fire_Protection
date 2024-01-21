<?php

    require '../config/function.php';

    $query = "SELECT * FROM user LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result)
    {
     if(mysqli_num_rows($result) == 1)
     {
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if(isset($_SESSION['auth'])){
  

    logoutSession();
      $user_id = $row['id'];
    // Set the default timezone to Asia/Manila (Philippines)
    date_default_timezone_set('Asia/Manila');
    // Get the local timezone
    $logout_time = date('Y-m-d H:i:s');
    $adminsql = "UPDATE user SET logged_out = '$logout_time' WHERE id = '$user_id';";
    $result = mysqli_query($conn, $adminsql);
    redirect('../login.php', 'Logged Out Sucessfully.');

   }
}
}
?>