<?php

$pageTitle = "BFP || Account User";

include('includes/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5> Add User
                    <a href="add_users.php" class="btn btn-dark float-end"> Add Users</a>
                </h5>
                <div class="col-md-7">
                    <form action="" method="GET">
                        <div class="row">
                            <div class="col-md-4">
                            <select name="status" required class="form-control">
                                    <option value="">Select Role</option>
                                    <option value="Admin" <?= isset($_GET['status'])  == true ? ($_GET['status'] == 'Admin' ? 'selected' : '') : '' ?>>
                                        Admin</option>
                                    <option value="Client" <?= isset($_GET['status']) == true ? ($_GET['status'] == 'Client' ? 'selected' : '') : ''  ?>>Client</option>
                                    <option value="Employee" <?= isset($_GET['status']) == true ? ($_GET['status'] == 'Employee' ? 'selected' : '') : ''  ?>>Employee</option>
                                    <option value="Inspector" <?= isset($_GET['status']) == true ? ($_GET['status'] == 'Inspector' ? 'selected' : '') : ''  ?>>Inspector</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                            <button type="submit" class="btn btn-dark">Filter</button>
                                <a href="users.php" class="btn btn-danger">Reset</a>
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
                    $users = mysqli_query($conn, "SELECT * FROM user WHERE role='$role' ORDER BY id DESC");
                } else {
                    $users = getAll('user');
                }
                if ($users) {
                    if (mysqli_num_rows($users) > 0) {
                ?>
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                <th class="text-center">Id</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Phone Number</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Role</th>
                                    <th class="text-center">Created At</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                foreach ($users as $userItem) {
                                ?>
                                    <tr>
                                    <td class="text-center"> <?= $userItem['id'] ?> </td>
                                        <td class="text-center"><?= $userItem['name'] ?> </span></td>
                                        <td class="text-center"><?= $userItem['phone_num'] ?> </span></td>
                                        <td class="text-center"><?= $userItem['email'] ?></td>
                                        <td class="text-center"><?= $userItem['is_ban'] == true ? ' <span class = "badge bg-danger text-white mx-4"> Deactivate </span>' : '<span class ="badge bg-success text-white mx-4" > Active' ?></td>
                                        <td class="text-center"><?= $userItem['role'] ?> </span></td>
                                        <td class="text-center"><?= $userItem['created_at'] ?> </span></td>
                                        <td class="text-center">
                                            <a href="edit_users.php?id=<?= $userItem['id'] ?>" class="btn btn-success btn-sm">Edit</a>
                                            <a href="delete_users_func.php?id=<?= $userItem['id'] ?>" class="btn btn-danger btn-sm mx-2 " onclick="return confirm('Are you sure you want to delete this data?')">Delete</a>
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