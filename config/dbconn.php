<?php 


    define('DB_SERVER', "localhost");
    define('DB_USERNAME', "root");
    define('DB_PASSWORD', "");
    define('DB_DATABASE', 'bfp');

    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

    if(!$conn)
    {
        die("Connection Failed!". mysqli_connect_error());
    }



?>