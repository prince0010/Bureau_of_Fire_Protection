<?php

    $pageTitle = "BFP || Remarks";

include('includes/header.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5> Remarks 
                    <a href="add_remarks.php" class="btn btn-dark float-end">Add Remarks</a>
                    </h5>
                    
                </div>
                <div class="card-body">
                <div id ="alertmessage">
                            <?= alertMessage(); ?>
                        </div>

                        <table id = "myTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class = "text-center">Id</th>
                                    <th class = "text-center">Remarks</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                   $services = getAll('remarks');
                                   if($services)
                                   {

                                   if(mysqli_num_rows($services) > 0)
                                   {
                                            foreach($services as $servicesItem)
                                            {
                                                ?>
                           
                        
                                           <tr>
                                            <td class = "text-center"><?= $servicesItem['id']?> </span></td>
                                            <td class = "text-center"><?= $servicesItem['remarks']?> </span></td>
                                                                
                            
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

<?php include('includes/footer.php'); ?>