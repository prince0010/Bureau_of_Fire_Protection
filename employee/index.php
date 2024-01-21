<?php

$pageTitle = "BFP || User List";

include('include/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5> 
                    List
                    <a href="inspection_order_data.php" class="btn btn-dark float-end mx-2">Inspection Order</a>
                    <a href="denied_io.php" class="btn btn-dark float-end"> Denied Request I/O</a>
                </h5>
                <div class="col-md-7">
                    <form action="" method="GET">
                        <div class="row">
                            <div class="col-md-4">
                                <select name="status" required class="form-control">
                                    <option value="">Select Role</option>
                                    <option value="1" <?= isset($_GET['status'])  == true ? ($_GET['status'] == '1' ? 'selected' : '') : '' ?>>
                                    Pending for Admin Check </span></option>
                                    <option value="2" <?= isset($_GET['status']) == true ? ($_GET['status'] == '2' ? 'selected' : '') : ''  ?>>Confirmed by Admin </span></option>
                                    <option value="0" <?= isset($_GET['status']) == true ? ($_GET['status'] == '3' ? 'selected' : '') : ''  ?>>Pending for Employee Check </span></option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-dark">Filter</button>
                                <a href="index.php" class="btn btn-danger">Reset</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-body">
                <div id="alertmessage">
                    <?= alertMessage(); ?>
                </div>
                <?php
                if (isset($_GET['status']) && isset($_GET['status']) != '') {
                    $role = validate($_GET['status']);
                    $services  = mysqli_query($conn, "SELECT * FROM request WHERE status='$role' ORDER BY id DESC");
                } else {
                    // $services  = getAll('request');
                    $table = validate('request');
                    $query = "SELECT * FROM $table WHERE status = '0' ORDER BY id DESC";
                    $services = mysqli_query($conn, $query);
                }
                if ($services ) {
                    if (mysqli_num_rows($services ) > 0) {
                ?>
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class = "text-center">Date</th>
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
                                foreach ($services as $servicesItem) {
                                ?>
                                      <tr>
                                            <td class = "text-center"> <?= $servicesItem['date']?> </td>
                                            <td class = "text-center"> <?= $servicesItem['owner_name']?> </td>
                                            <td class = "text-center"><?= $servicesItem['business_name']?></td>
                                            <td class = "text-center"><?= $servicesItem['phone_num']?></td>
                                            <td class = "text-center"><?= $servicesItem['barangay']?></td>
                                            <td class = "text-center">
                            <?php
                                  if($servicesItem['status'] == 1){
                                     echo '<span class = "badge bg-info text-white"> Pending for <br />  Admin Check </span>';
                                     }
                                 elseif($servicesItem['status'] == 2){
                                    echo '<span class = "badge bg-success text-white"> Confirmed by <br /> Admin </span>';
                                     }
                                     else{
                                        echo '<span class = "badge bg-success text-white"> Pending for <br /> Employee Check </span>';
                                         }
                                       ?>
                            </td> 
                            <td class = "text-center"><?= $servicesItem['landmark']?></td>
                                    <td class = "text-center"><?= $servicesItem['remarks']?></td>
                            <td class = "text-center"> 
                               
                                <?php 
                                if($servicesItem['status'] == 1){
                                    ?>
                                     <a href="view_request.php?id=<?= $servicesItem['id']?>" class = "btn btn-blue btn-xs"><i style="font-size:17px" class="fa fa-eye"></i></a>
                                        <a href="delete_request.php?id=<?= $servicesItem['id']?>"
                                         class = "btn btn-danger btn-xs "
                                         onclick = "return confirm('Are you sure you want to delete this data?')"><i style="font-size:17px" class="fa fa-trash-o"></i></a>
                                    <?php
                                      }
                                    else{
                                    ?>
                                     <a href="view_request.php?id=<?= $servicesItem['id']?>" class = "btn btn-blue btn-xs"><i style="font-size:17px" class="fa fa-eye"></i></a>
                                        <a href="confirm_request.php?id=<?= $servicesItem['id']?>" class = "btn btn-success btn-xs" name = "confirmBtn"><i style="font-size:17px" class="fa fa-check"></i></a>
                                        <a href="delete_request.php?id=<?= $servicesItem['id']?>"
                                         class = "btn btn-danger btn-xs "
                                         onclick = "return confirm('Are you sure you want to delete this data?')"><i style="font-size:17px" class="fa fa-trash-o"></i></a>
                                    <?php
                                    }
                              
                                ?>
                                        
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                <?php
                    } else {
                        echo '<h5> No Client is Requesting Yet </h5>';
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








