<?php

    $pageTitle = "BFP || Requested Forms";

include('include/header.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3> Requested Forms
                    </h3>
                   
                </div>
                <div class="card-body">

                <div id ="alertmessage">
                            <?= alertMessage(); ?>
                        </div>

                        <table id = "myTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class = "text-center">Name</th>
                                    <th class = "text-center">Business Name</th>
                                    <th class = "text-center">Phone Number</th>
                                    <th class = "text-center">Barangay</th>
                                    <th class = "text-center">Status</th>
                                    <th class = "text-center">Location</th>
                                    <th class = "text-center">Remarks</th> 
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
                                            <td class = "text-center"> <?= $servicesItem['owner_name']?> </td>
                                            <td class = "text-center"><?= $servicesItem['business_name']?></td>
                                            <td class = "text-center"><?= $servicesItem['phone_num']?></td>
                                            <td class = "text-center"><?= $servicesItem['barangay']?></td>
                                            <td class = "text-center">
                            <?php
                                  if($servicesItem['status'] == 1){
                                     echo '<span class = "badge bg-sucess text-white"> Pending for Admin Check </span>';
                                     }
                                 elseif($servicesItem['status'] == 2){
                                    echo '<span class = "badge bg-success text-white"> Confirmed to Admin </span>';
                                     }
                                     else{
                                        echo '<span class = "badge bg-success text-white"> Pending for Employee Check </span>';
                                         }
                                       ?>
                            </td> 
                            <td class = "text-center"><?= $servicesItem['landmark']?></td>
                                    <td class = "text-center"><?= $servicesItem['remarks']?></td>
                            <td class = "text-center"> 
                                <a  href="view_request.php?id=<?= $servicesItem['id']?>" class = "btn btn-blue btn-xs"><i style="font-size:17px" class="fa fa-eye"></i></a>
                                        <a  href="confirm_request.php?id=<?= $servicesItem['id']?>" class = "btn btn-success btn-xs" name = "confirmBtn"><i style="font-size:17px" class="fa fa-check"></i></a>
                                        <a href="delete_request.php?id=<?= $servicesItem['id']?>"
                                         class = "btn btn-danger btn-xs "
                                         onclick = "return confirm('Are you sure you want to delete this data?')"><i style="font-size:17px" class="fa fa-trash-o"></i></a>
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

<?php include('include/footer.php'); ?>

<!-- <div class="row">
        <div class="col-md-12">
            
            <div class="card">
            <div id ="alertmessage">
                            <?= alertMessage(); ?>
                        </div>
            <div class="card-header text-center">
            THIS IS EMPLOYEE
                </div>
                <hr class = "bg-dark">
                <div class="card-body">
                    THIS IS EMPLOYEE
          </div>
</div>
          </div>
</div> -->

