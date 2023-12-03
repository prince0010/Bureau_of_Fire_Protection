<?php

$pageTitle = "BFP || Inspection Order";

include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5> Inspectors Data
                    <a href="add_users.php" class="btn btn-dark float-end"> Add Inspectors Data</a>
                </h5>
                <div class="col-md-7">
                    <form action="" method="GET">
                        <div class="row">
                            <div class="col-md-4">
                                <select name="status" required class="form-control">
                                    <option value="">Select Inspector</option>
                                    <?php
                                    $sql = "SELECT * FROM inspector_user";
                                    $result = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($result) > 0) {
                                        foreach ($result as $row) {
                                    ?>
                                            <option value="<?= $row['name'] ?>" <?= isset($_GET['status'])  == true ? ($_GET['status'] == $row['name'] ? 'selected' : ' ') : ' ' ?>> <?= $row['position'] ?> <?= $row['name'] ?>
                                            </option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-dark">Filter</button>
                                <a href="inspection_order.php" class="btn btn-danger">Reset</a>
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
                    $services = mysqli_query($conn, "SELECT * FROM inspection_order WHERE inspection_name ='$role' ORDER BY id DESC");
                } else {
                    $services = getAll('inspection_order');
                }
                if ($services) {
                    if (mysqli_num_rows($services) > 0) {
                ?>
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
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
                                        <td class="text-center"><?= $servicesItem['inspection_name'] ?> </span></td>
                                        <td class="text-center"><?= $servicesItem['proceed_info'] ?> </span></td>
                                        <td class="text-center"><?= $servicesItem['purpose_info'] ?> </span></td>
                                        <td class="text-center"><?= $servicesItem['duration'] ?> </span></td>
                                        <td class="text-center"><?= $servicesItem['remarks'] ?> </span></td>
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

<?php include('includes/footer.php'); ?>