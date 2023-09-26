<?php

    $pageTitle = "BFP || Account User";

include('includes/header.php'); ?>

    <div class="row">
        <div class="col-md-121">
            <div class="card">
                <div class="card-header">
                    <h5> User List
                    <a href="add_users.php" class="btn btn-dark float-end">Add User</a>
                    </h5>
                   
                </div>
                <div class="card-body">

                <div id ="alertmessage">
                            <?= alertMessage(); ?>
                        </div>

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class = "text-center">Id</th>
                                    <th class = "text-center">Name</th>
                                    <th  class = "text-center">Phone Number</th>
                                    <th class = "text-center">Email</th>
                                    <th class = "text-center">Status</th>
                                    <th class = "text-center">Role</th>
                                    <th class = "text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                   $users = getAll('user');
                                   if(mysqli_num_rows($users) > 0)
                                   {
                                            foreach($users as $userItem)
                                            {
                                                ?>
                                           <tr>
                                            <td><span class = "mx-4"> <?= $userItem['id']?> </span></td>
                                            <td><span class = "mx-4"> <?= $userItem['name']?> </span></td>
                                            <td><span class = "mx-4"> <?= $userItem['phone_num']?> </span></td>
                                            <td><?= $userItem['email']?></td>
                                            <td><?= $userItem['is_ban'] == true ? ' <span class = "badge bg-danger text-white mx-4"> Banned </span>' : '<span class ="badge bg-success text-white mx-4" > Active' ?></td>
                                            <td><span class = "mx-4"> <?= $userItem['role']?> </span></td>
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