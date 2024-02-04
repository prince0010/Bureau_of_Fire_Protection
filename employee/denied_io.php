<?php

$pageTitle = "BFP || Denied Inspection Order";

include('include/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5> Denied Request Inspection Order
                <a href="index.php" class="btn btn-dark float-end"> Back </a>
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
                    $services = mysqli_query($conn, "SELECT * FROM request WHERE status = '3' OR status = '4' ORDER BY id DESC");
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
                                        <td class="text-center">
                                            <?php
                                        if($servicesItem['owner_name'] == '') {
                                            echo 'No Data Inputted';
                                        }else{
                                           echo $servicesItem['owner_name'] ;
                                        }
                                        ?> 
                                        </span></td>
                                        <td class="text-center">     
                                            <?php
                                        if($servicesItem['inspection_name'] == '') {
                                            echo 'No Data Added';
                                        }else{
                                           echo $servicesItem['inspection_name'] ;
                                        }
                                        ?>  </span></td>
                                        <td class="text-center">
                                        <?php
                                        if($servicesItem['proceed_info'] == '') {
                                            echo 'No Data Added';
                                        }else{
                                           echo $servicesItem['inspection_name'] ;
                                        }
                                        ?>  
                                    </span></td>
                                        <td class="text-center">
                                        <?php
                                        if($servicesItem['purpose_info'] == '') {
                                            echo 'No Data Added';
                                        }else{
                                           echo $servicesItem['purpose_info'] ;
                                        }
                                        ?> 
                                    </span></td>
                                        <td class="text-center">
                                        <?php
                                        if($servicesItem['duration'] == '') {
                                            echo 'No Data Added';
                                        }else{
                                           echo $servicesItem['duration'] ;
                                        }
                                        ?> 
                                        </span></td>
                                        <td class="text-center">
                                        <?php
                                        if($servicesItem['remarks'] == '') {
                                            echo 'No Data Added';
                                        }else{
                                           echo $servicesItem['remarks'] ;
                                        }
                                        ?> 
                                         </span></td>
                                        <td class="text-center">
                                        <?php
                                        if($servicesItem['msg_send'] == '3') {
                                            echo '<span class = " badge bg-dark text-white"> The Request is Rejected <br/> and <br />Done Updated the User </span>' ;
                                         }
                                        elseif($servicesItem['updated_status'] == '0' ) {
                                            echo '<span class = " badge bg-dark text-white"> Request Rejected </span>';
                                        }
                                       elseif($servicesItem['updated_status'] == '1' || $servicesItem['status'] == '4') {
                                           echo '<span class = " badge bg-dark text-white"> The Request is <br/> Updated by the Client User </span>' ;
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
                                        <a href="accepted_request.php?id=<?= $servicesItem['id']; ?>" class="btn btn-success " onclick="return confirm('Confirm this Action?')"> Accept </a>
                                            <!-- <a href="denied_request_inc.php?id=<?= $servicesItem['id'];  ?>" class="btn btn-danger mx-2 "> Denied </a> -->
                                            <a href="sms_message_inc.php?id=<?=$servicesItem['id']; ?>" class="btn btn-dark ">Update User</a>
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

<?php include('include/scripts.php'); ?>