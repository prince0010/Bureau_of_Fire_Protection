<?php

    $pageTitle = "BFP || Services";

include('includes/header.php'); ?>

    <div class="row">
                
    <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5> Services
                    <a href="add_services.php" class="btn btn-dark float-end">Add Services</a>
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
                                    <th class = "text-center">Service Name</th>
                                    <th class = "text-center">Status</th>
                                    <th class = "text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                   $services = getAll('services');
                                   if($services)
                                   {

                                   if(mysqli_num_rows($services) > 0)
                                   {
                                            foreach($services as $servicesItem)
                                            {
                                                ?>
                                           <tr>
                                            <td class = "text-center"> <?= $servicesItem['id']?> </td>
                                            <td class = "text-center"><?= $servicesItem['serv_name']?> </span></td>
                                            <td class = "text-center">
                            <?php
                                  if($servicesItem['status'] == 1){
                                     echo '<span class = "badge bg-danger text-white"> Hidden </span>';
                                     }
                                 else{
                                    echo '<span class = "badge bg-success text-white"> Visible </span>';
                                     }
                                       ?>
                            </td>
                                                                
                            <td class = "text-center">
                                        <a  href="edit_services.php?id=<?= $servicesItem['id']?>" class = "btn btn-success btn-sm">Edit</a>
                                        <a href="delete_services.php?id=<?= $servicesItem['id']?>"
                                         class = "btn btn-danger btn-sm mx-2 "
                                         onclick = "return confirm('Are you sure you want to delete this data?')">Delete</a>
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

<?php include('includes/footer.php'); ?>