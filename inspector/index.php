<?php

$pageTitle = "BFP || Inspection Order";

include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5> Scheduled Time by Employee
                <a href="exceeed_schedule.php" class="btn btn-dark float-end"> Exceed Scheduled </a>
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
                    $name = $_SESSION['loggedInUser']['name'];
                   
                    $currentDate = gmdate('Y-m-d ');
                    $services = mysqli_query($conn, "SELECT * FROM request WHERE inspection_name = '$name' AND inspector_sched = '1' AND datetime_local >'$currentDate'");
                }
                if ($services) {
                    if (mysqli_num_rows($services) > 0) {
                    //  echo $currentDate ;
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
                                    <th class="text-center">Schedule Date</th>
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
                                        <td class="text-center"><?= date('Y-m-d h:i A', strtotime( $servicesItem['datetime_local'] )); ?></span></td>
                                        <td class="text-center">
                                            <?php 
                                            if( $servicesItem['reschedule_update'] == '1'){
                                                echo '<span class = "badge bg-info"> The Scheduled date<br/>  is Re-scheduled <br/>by You </span>' ;
                                           
                                            }
                                            elseif($servicesItem['status'] == '1'){
                                                echo '<span class = "badge bg-info"> Checked by by<br/>  the admin </span>' ;
                                            }
                                            elseif($servicesItem['status'] == '2'){
                                                echo '<span class = "badge bg-info"> Confirmed by<br/>  the admin </span>' ;

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
                                            <a href="reschedule_data.php?id=<?= $servicesItem['id'] ?>" class="btn btn-dark btn-xs ">Re-schedule</i></a>
                                            
                                            <!-- <a href="delete_inspection_data.php?id=<?= $servicesItem['id'] ?>" class="btn btn-danger btn-sm mx-2 " onclick="return confirm('Are you sure you want to delete this data?')"><i style="font-size:17px" class="fa fa-trash-o"></i></a> -->
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                <?php
                    } else {
                        echo '<h5> Check the Exceed Scheduled Page</h5>';
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