<?php 

require '../config/function.php' ;

include('./authentication.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />
    <title>
        <?php 
            if(isset($pageTitle)){
                echo $pageTitle;
            }
            else{
                echo 'BFP || Bureau of Fire Protection';
            }
         ?>
    </title>
    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php 
    include('navbar.php');
?>
    