<?php

    $pageTitle = "BFP || Duration";

include('includes/header.php'); ?>

    <div class="row">
        
    <div class="col-md-12">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                
                    <h5> Duration
                    <a href="add_duration.php" class="btn btn-dark float-end">Add Duration</a>
                    </h5>
                    
                </div>
                <div class="card-body">

                <div id ="alertmessage">
                            <?= alertMessage(); ?>
                        </div>

                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class = "text-center">Id</th>
                                    <th class = "text-center">Duration</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                   $services = getAll('duration');
                                   if($services)
                                   {

                                   if(mysqli_num_rows($services) > 0)
                                   {
                                            foreach($services as $servicesItem)
                                            {
                                                ?>
                            
                        
                                           <tr>
                                            <td class = "text-center"><?= $servicesItem['id']?> </span></td>
                                            <td class = "text-center"><?= $servicesItem['duration']?> </span></td>
                                            </tr>
                                                                
                         
                          
                                                 <?php
                                               
                                            }
                                   }
                                }
                                   else{
                                    ?>
                                        <td cosplan = "3" >No Record Found</td>
                                    <?php

                                   }

                                ?>
                            
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>

    <?php include('includes/scripts.php'); ?>