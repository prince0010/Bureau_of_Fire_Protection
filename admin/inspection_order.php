<?php

$pageTitle = "BFP || Inspection Order";

include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5> Inspectors Data
                    <a href="confirmed_io.php" class="btn btn-dark float-end mx-2"> Confirm Request I/O</a>
                    <a href="denied_io.php" class="btn btn-dark float-end"> Denied Request I/O</a>
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
                    $services = mysqli_query($conn, "SELECT * FROM request WHERE status = '1' AND updated_status = '1' ");
                    // $services = getAll('request');
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
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($services as $servicesItem) {
                                ?>
                                    <tr>
                                        <td class="text-center"><?= $servicesItem['owner_name'] ?> </span></td>
                                        <td class="text-center"><?= $servicesItem['inspection_name'] ?> </span></td>
                                        <td class="text-center"><?= $servicesItem['proceed_info'] ?> </span></td>
                                        <td class="text-center"><?= $servicesItem['purpose_info'] ?> </span></td>
                                        <td class="text-center"><?= $servicesItem['duration'] ?> </span></td>
                                        <td class="text-center"><?= $servicesItem['remarks'] ?> </span></td>
                                        <td class="text-center">
                                            <?php 
                                            if($servicesItem['status'] == '2' ){
                                                echo '<span class = "badge bg-success text-white"> Please Check and<br/>  Confirm this Admin </span>';
                                            }
                                            else{
                                                echo '<span class = "badge bg-info text-white"> Client Updated <br/> the Rejected Data </span>';
                                            }
                                        
                                            ?> 
                                    </span>
                                        </td>
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
                                            <a href="confirm_inspection_data.php?id=<?= $servicesItem['id'] ?>" class="btn btn-success btn-sm"><i style="font-size:17px" class="fa fa-check"></i></a>
                                            <a href="delete_inspection_data.php?id=<?= $servicesItem['id'] ?>" class="btn btn-danger btn-sm mx-2 " onclick="return confirm('Are you sure you want to delete this data?')"><i style="font-size:17px" class="fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                <?php
                    } else {
                        echo '<h5> No Record Found </h5>';
                    }
                } else {
                    echo '<h5> Something Went Wrong </h5>';
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php include('includes/scripts.php'); ?>