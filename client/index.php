<?php include('include/header.php');?>


<div class="row">
        <div class="col-md-12">
            
            <div class="card">
            <div id ="alertmessage">
                            <?= alertMessage(); ?>
                        </div>
            <div class="card-header text-center">
                    <h3> 
                    Click Here to Fill Up
                    </h3>
                </div>
                <hr class = "bg-dark">
                <div class="card-body text-center">
                    <a href="form_request.php?id=<?= $_SESSION["loggedInUser"]['id'] ?>" class="btn btn-dark p-4">Fill Up</a>
          </div>
</div>
          </div>
</div>
            <hr class = "bg-dark">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5> Request List
                                <a href="add_users.php" class="btn btn-dark float-end">Add User</a>
                                </h5>
                                <div class="col-md-7">
                    </div>
                            </div>
                            <div class="card-body">
                            <div id ="alertmessage">
                                        <?= alertMessage(); ?>
                                    </div>
                                    <?php
                                            if(isset($_GET['status']) && isset($_GET['status']) != '' ){
                                                $role = validate($_GET['status']);
                                                $users = mysqli_query($conn, "SELECT * FROM user WHERE role='$role' ORDER BY id DESC");
                                            }
                                            else{
                                                $users = getAll('inspection_order');
                                            }
                                            if($users){
                                                if(mysqli_num_rows($users) > 0)
                                                {
                                                ?>
                                        <table id = "myTable" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th class = "text-center">Id</th>
                                                    <th class = "text-center">To</th>
                                                    <th class = "text-center">Proceed</th>
                                                    <th  class = "text-center">Purpose</th>
                                                    <th class = "text-center">Duration</th>
                                                    <th class = "text-center">Remarks</th>
                                                    <th class = "text-center">Actions</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach($users as $userItem)
                                                        {
                                                            ?>
                                                        <tr>
                                                        <td class = "text-center"> <?= $userItem['id']?> </td>
                                                        <td class = "text-center"><?= $userItem['to']?> </span></td>
                                                        <td class = "text-center"><?= $userItem['proceed']?> </span></td>
                                                        <td class = "text-center"><?= $userItem['purpose']?> </span></td>
                                                        <td class = "text-center"><?= $userItem['duration']?></td>
                                                        <td class = "text-center"><?= $userItem['remarks']  ?></td>
                                                        <td class = "text-center">
                                                    <a  href="edit_users.php?id=<?= $userItem['id']?>" class = "btn btn-success btn-sm">Edit</a>
                                                    <a href="delete_users_func.php?id=<?= $userItem['id']?>"
                                                        class = "btn btn-danger btn-sm mx-2 "
                                                        onclick = "return confirm('Are you sure you want to delete this data?')">Delete</a>
                                                </td>
                                                </tr>
                                                            <?php
                                                        }
                                                        ?>
                                        </tbody>
                                    </table>
                                    <?php
                                            }
                                        else{
                                            echo '<h5> No Record Found </h5>';
                                        }

                                                }
                                                else{
                                                echo '<h5> Something Went Wrong </h5>';
                                                }
                                            ?>
                            </div>
                        </div>
                    </div>
                </div>

<?php include('include/footer.php');?>