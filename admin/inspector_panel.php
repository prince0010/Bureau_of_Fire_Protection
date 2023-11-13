<?php

    $pageTitle = "BFP || Services";

include('includes/header.php'); ?>

    <div class="row">
        
    <div class="col-md-12">
            <div class="card">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5> Inspector Name
                    <a href="add_inspector.php" class="btn btn-dark float-end">Add Inspector</a>
                    </h5>
                </div>
                <div class="card-body">

                <div id ="alertmessage">
                            <?= alertMessage(); ?>
                        </div>
                    
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class = "text-center">Id</th>
                                    <th class = "text-center">Position</th>
                                    <th class = "text-center">Name</th>
                                    <th class = "text-center">Actions</th>
                                </tr>
                            </thead>
                            <?php
                                   $services = getAll('inspector_user');
                                   if($services)
                                   {

                                   if(mysqli_num_rows($services) > 0)
                                   {
                                            foreach($services as $servicesItem)
                                            {
                                                ?>
                            <tbody>
                                           <tr>
                                            <td class = "text-center"><?= $servicesItem['id']?> </span></td>
                                            <td class = "text-center"><?= $servicesItem['position']?> </span></td>
                                            <td class = "text-center"><?= $servicesItem['name']?> </span></td>
                                                                
                            <td class = "text-center">
                                        <a  href="edit_inspector.php?id=<?= $servicesItem['id']?>" class = "btn btn-success btn-sm"><i style="font-size:17px" class="fa fa-edit"></i></a>
                                        <a href="delete_inspector.php?id=<?= $servicesItem['id']?>"
                                         class = "btn btn-danger btn-sm mx-2 "
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

<?php include('includes/footer.php'); ?>