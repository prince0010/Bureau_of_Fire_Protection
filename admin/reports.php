
<?php

    $pageTitle = "BFP || Remarks";

include('includes/header.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5> Reports 
                    </h5>
                    
                </div>
                <div class="card-body">
                <div id ="alertmessage">
                            <?= alertMessage(); ?>
                        </div>

                        <table id = "myTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class = "text-center">Date</th>
                                    <th class = "text-center">Name</th>
                                    <th class = "text-center">Business Name</th>
                                    <th class = "text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                   $services = getAll('request');
                                   if($services)
                                   {

                                   if(mysqli_num_rows($services) > 0)
                                   {
                                            foreach($services as $servicesItem)
                                            {
                                                ?>
                                           <tr>
                                            <td class = "text-center"><?= $servicesItem['date']?> </span></td>
                                            <td class = "text-center"><?= $servicesItem['owner_name']?> </span></td>
                                            <td class = "text-center"><?= $servicesItem['business_name']?> </span></td>
                                            <td class="text-center">
                                            <a href="generate_pdf.php?id=<?= $servicesItem['id']?>" class="btn btn-dark btn-sm"><i style="font-size:17px" class="fa fa-print"></i></a>
                                            </td>
                                </tr>
                                                 <?php
                                            }
                                   }
                                }
                                   else{
                                    ?>
                                        <td cosplan = "4" >No Record Found</td>
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