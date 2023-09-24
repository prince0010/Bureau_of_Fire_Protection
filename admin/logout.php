<?php


    require '../config/function.php';

   if(isset($_SESSION['auth'])){

    logoutSession();
    redirect('../client/login.php', 'Logged Out Sucessfully.');

   }
?>