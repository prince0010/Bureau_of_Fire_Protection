<?php

$pageTitle = "BFP || Inspection Order Data";

include('include/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5> Inspection Order
                <a href="index.php" class="btn btn-dark float-end">Back</a>
                </h5>
            </div>
            <div class="card-body">
                <div id="alertmessage">
                    <?= alertMessage(); ?>
                </div>
                <?php
                if (isset($_GET['status']) && isset($_GET['status']) != '') {
                    $role = validate($_GET['status']);
                    $services = mysqli_query($conn, "SELECT * FROM request WHERE inspection_name ='$role' ORDER BY id DESC");
                } else {
                   
                    $services = getAll('request');
                }
                if ($services) {
                    if (mysqli_num_rows($services) > 0) {
                ?>
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">Client Name</th>
                                    <th class="text-center">To</th>
                                    <th class="text-center">Proceed</th>
                                    <th class="text-center">Purpose</th>
                                    <th class="text-center">Duration</th>
                                    <th class="text-center">Remarks or Additional Instruction</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($services as $servicesItem) {
                                ?>
                                    <tr>
                                        <td class="text-center">

                                            <?php 
                                            if($servicesItem['owner_name'] == ''){
                                            echo '<span > No Data </span>';
                                            }
                                            else{
                                               echo $servicesItem['owner_name'];
                                            }
                                             ?>
                                        
                                        </span></td>
                                        <td class="text-center">
                                        <?php 
                                            if($servicesItem['inspection_name'] == ''){
                                            echo '<span > No Data </span>';
                                            }
                                            else{
                                              echo $servicesItem['inspection_name'];
                                            }
                                             ?>
                                      
                                    
                                    </span></td>

                                        <td class="text-center">
                                        <?php 
                                            if($servicesItem['proceed_info'] == ''){
                                            echo '<span > No Data </span>';
                                            }
                                            else{
                                              echo $servicesItem['proceed_info'];
                                            }
                                             ?>
                                        
                                    
                                    </span></td>
                                        <td class="text-center">
                                        <?php 
                                            if($servicesItem['purpose_info'] == ''){
                                            echo '<span > No Data </span>';
                                            }
                                            else{
                                              echo $servicesItem['purpose_info'];
                                            }
                                             ?>
                                        
                                        </span></td>
                                        <td class="text-center">
                                        <?php 
                                            if($servicesItem['duration'] == ''){
                                            echo '<span > No Data </span>';
                                            }
                                            else{
                                              echo $servicesItem['duration'];
                                            }
                                             ?>
                                        
                                        </span></td>
                                        <td class="text-center">
                                        <?php 
                                            if($servicesItem['remarks'] == ''){
                                            echo '<span > No Data </span>';
                                            }
                                            else{
                                              echo $servicesItem['remarks'];
                                            }
                                             ?>
                                        </span></td>
                                        <!--   <td class = "text-center">
                           <?php
                                    if ($servicesItem['status'] == 1) {
                                        echo '<span class = "badge bg-danger text-white"> Hidden </span>';
                                    } else {
                                        echo '<span class = "badge bg-success text-white"> Visible </span>';
                                    }
                            ?> -->
                                        </td>

                                        <td class="text-center">
                                        <a href="delete_inspection_order.php?id=<?= $servicesItem['id']?>"
                                         class = "btn btn-danger btn-xs "
                                         onclick = "return confirm('Are you sure you want to delete this data?')"><i style="font-size:17px" class="fa fa-trash-o"></i></a>
                                            <a href="view_inspection_order.php?id=<?= $servicesItem['id']; ?>" class="btn btn-success btn-sm"><i style="font-size:17px" class="fa fa-eye"></i></a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                <?php
                    } else {
                        echo '<h5>  No Client is Requesting Yet </h5>';
                    }
                } else {
                    echo '<h5> Something Went Wrong </h5>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php include('include/scripts.php'); ?>