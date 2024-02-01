<?php 
require '../config/function.php' ;
include('./authentication.php');
 ?>
 
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="assets/img/apple-icon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>
   <?php 
   if(isset($pageTitle)){
    echo $pageTitle;
   }
   else{
    // If the data is not found then return the BFP || Bureau of Fire Protection
    echo webSetting('title') ?? 'BFP || Bureau of Fire Protection';
   }
   ?> </title>
  <meta name="description" content="<?= webSetting('mdescription') ?? 'Meta Description';?>">
  <meta name="keyword" content="<?= webSetting('mkeyword') ?? 'Meta Keyword';?>">
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <link href="assets/css/custom.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />


  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" />
</head>

<body class="g-sidenav-show bg-gray-100">

<?php include('sidebar.php');?>


<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
   

        <?php include('navbar.php');?>
        
        <div class="container-fluid py-4">