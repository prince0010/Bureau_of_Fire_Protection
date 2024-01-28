<?php 

require 'config/function.php' ;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
            if(isset($pageTitle)){
                echo $pageTitle;
            }
            else{
                echo 'BFP || Nazareth Bureau of Fire Protection';
            }
         ?>
    </title>
    
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<?php 
    include('navbar.php');
?>

    