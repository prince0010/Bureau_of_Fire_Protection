<?php

    $pageTitle = "BFP || Services";

include('includes/header.php'); ?>

    <div class="row">
        
    <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5> User List
                   <a href="add_users.php" class="btn btn-dark float-end">Add User</a>
                    </h5>
                    <div class="col-md-7">
            <form action="" method = "GET">
                <div class="row">
                    <div class="col-md-4">
                        <input type="date" name="" class = "form-control">
                    </div>
                    <div class="col-md-4">
                        <select name="status" id="" class = "form-control">
                            <option value="">Select Status</option>
                            <option value="pending">Pending</option>
                            <option value="completed">Completed</option>
                            <option value="cancelled">Cancelled</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class = "btn btn-dark">Filter</button>
                        <a href = "purpose_panel.php" class = "btn btn-danger">Reset</a>
                    </div>
                </div>
            </form>
        </div>
                </div>
                
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
               
                    <h5> Purpose
                    <a href="add_purpose.php" class="btn btn-dark float-end">Add Purpose</a>
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
                                    <th class = "text-center">Purpose</th>
                                    <th class = "text-center">Actions</th>
                                </tr>
                            </thead>
                            <?php
                                   $services = getAll('purpose');
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
                                            <td class = "text-center"><?= $servicesItem['purpose']?> </span></td>
                                                                
                            <td class = "text-center">
                                        <a  href="edit_purpose.php?id=<?= $servicesItem['id']?>" class = "btn btn-success btn-sm"><i style="font-size:17px" class="fa fa-check"></i></a>
                                        <a href="delete_purpose.php?id=<?= $servicesItem['id']?>"
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