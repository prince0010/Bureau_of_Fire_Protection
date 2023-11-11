<?php

    $pageTitle = "BFP || Account User";

include('includes/header.php'); ?>

    <div class="row">
       
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5> User List
                   <a href="add_users.php" class="btn btn-dark float-end">Add User</a>
                    </h5>
                    <div class="col-md-7">
            <form action="" method = "GET">
                <div class="row">
                    <div class="col-md-4">
                        <input type="date" name="" class = "form-control">
                    </div>
                    <div class="col-md-4">
                        <select name="status" id="" class = "form-control">
                            <option value="">Select Status</option>
                            <option value="pending">Pending</option>
                            <option value="completed">Completed</option>
                            <option value="cancelled">Cancelled</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class = "btn btn-dark">Filter</button>
                        <a href = "users.php" class = "btn btn-danger">Reset</a>
                    </div>
                </div>
            </form>
        </div>
                </div>
                <div class="card-body">
               
                <div id ="alertmessage">
                            <?= alertMessage(); ?>
                        </div>

                        <table id = "myTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class = "text-center">Id</th>
                                    <th class = "text-center">Name</th>
                                    <th  class = "text-center">Phone Number</th>
                                    <th class = "text-center">Email</th>
                                    <th class = "text-center">Status</th>
                                    <th class = "text-center">Role</th>
                                    <th class = "text-center">Created At</th>
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
                                            <td class = "text-center"> <?= $userItem['id']?> </td>
                                            <td class = "text-center"><?= $userItem['name']?> </span></td>
                                            <td class = "text-center"><?= $userItem['phone_num']?> </span></td>
                                            <td class = "text-center"><?= $userItem['email']?></td>
                                            <td class = "text-center"><?= $userItem['is_ban'] == true ? ' <span class = "badge bg-danger text-white mx-4"> Banned </span>' : '<span class ="badge bg-success text-white mx-4" > Active' ?></td>
                                            <td class = "text-center"><?= $userItem['role']?> </span></td>
                                            <td class = "text-center"><?= $userItem['created_at']?> </span></td>
                                            <td class = "text-center">
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