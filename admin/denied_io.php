<?php

$pageTitle = "BFP || Denied Inspection Order";

include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5> Denied Request Inspection Order
                <a href="inspection_order.php" class="btn btn-dark float-end"> Back </a>
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
                    $services = mysqli_query($conn, "SELECT * FROM request WHERE status = '3' ORDER BY id DESC");
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
                                        <td class="text-center"><?php echo $servicesItem['owner_name'] == '' ? '<span class = "badge bg-dark text-white"> TBA </span>' : $servicesItem['owner_name'] ?> </span></td>
                                        <td class="text-center"><?php echo $servicesItem['inspection_name'] == '' ? '<span class = "badge bg-dark text-white"> TBA </span>' : $servicesItem['inspection_name'] ?> </span></td>
                                        <td class="text-center"><?php echo $servicesItem['proceed_info'] == '' ? '<span class = "badge bg-dark text-white"> TBA </span>' : $servicesItem['proceed_info']?> </span></td>
                                        <td class="text-center"><?php echo $servicesItem['purpose_info'] == '' ? '<span class = "badge bg-dark text-white"> TBA </span>' : $servicesItem['purpose_info']?> </span></td>
                                        <td class="text-center"><?php echo $servicesItem['duration'] == '' ? '<span class = "badge bg-dark text-white"> TBA </span>' : $servicesItem['duration']?> </span></td>
                                        <td class="text-center"><?php echo $servicesItem['remarks_IO'] == '' ? '<span class = "badge bg-dark text-white"> TBA </span>' : $servicesItem['remarks']?> </span></td>
                                        <td class="text-center"><?php echo $servicesItem['status'] == 3 ? '<span class = "badge bg-danger text-white"> Admin Denied <br/> the Request </span>' : '<span class = "badge bg-dark text-white"> The Client Re-Input <br/> the Request </span>' ?> </span></td>
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
                                        <a href="accepted_request.php?id=<?= $servicesItem['id']; ?>" class="btn btn-success " onclick="return confirm('Confirm this Action?')"> Access </a>
                                            <a href="denied_request_inc.php?id=<?= $servicesItem['id'];  ?>" class="btn btn-danger mx-2 "> Denied </a>
                                            <a href="delete_inspection_data.php?id=<?= $servicesItem['id'] ?>" class="btn btn-danger btn-sm " onclick="return confirm('Are you sure you want to delete this data?')"><i style="font-size:17px" class="fa fa-trash-o"></i></a>
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

<!-- <?php include('includes/footer.php'); ?> -->