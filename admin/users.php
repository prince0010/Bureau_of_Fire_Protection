<?php

    $pageTitle = "BFP || Account User";

include('includes/header.php'); ?>

    <div class="row">
        <div class="col-md-121">
            <div class="card">
                <div class="card-header">
                    <h5> User List</h5>
                    <a href="add_users.php" class="btn btn-dark float-end">Add User</a>
                </div>
                <div class="card-body">
                <?= alertMessage(); ?>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Name</td>
                                    <td>123@gmail.com</td>
                                    <td>123</td>
                                    <td>Admin</td>
                                    <td>Banned</td>
                                    <td>
                                        <a  href="edit_users.php" class = "btn btn-success btn-sm">Edit</a>
                                        <a href="delete_users.php" class = "btn btn-danger btn-sm mx-2 ">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>

<?php include('includes/footer.php'); ?>