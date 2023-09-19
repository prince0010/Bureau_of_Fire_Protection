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

                <div id ="alertmessage">
                            <?= alertMessage(); ?>
                        </div>

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                   $users = getAll('users');
                                   if(mysqli_num_rows($users) > 0)
                                   {
                                            foreach($users as $userItem)
                                            {
                                                ?>
                                           <tr>
                                            <td><?= $userItem['id']?></td>
                                            <td><?= $userItem['name']?></td>
                                            <td><?= $userItem['phone_num']?></td>
                                            <td><?= $userItem['email']?></td>
                                            <td><?= $userItem['is_ban'] == true ? 'Banned' : 'Active' ?></td>
                                            <td><?= $userItem['role']?></td>
                                            <td>
                                        <a  href="edit_users.php?id=<?= $userItem['id']?>" class = "btn btn-success btn-sm">Edit</a>
                                        <a href="delete_users_func.php?id=<?= $userItem['id']?>"
                                         class = "btn btn-danger btn-sm mx-2 "
                                         onclick = "return confirm('Are you sure you want to delete this data?')">Delete</a>
                                    </td>
                                </tr>
                                                <?php
                                               
                                            }
                                   }
                                   else{
                                    ?>
                                        <td cosplan = "7" >No Record Found</td>
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