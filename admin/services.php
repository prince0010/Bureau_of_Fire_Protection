<?php

    $pageTitle = "BFP || Services";

include('includes/header.php'); ?>

    <div class="row">
        <div class="col-md-121">
            <div class="card">
                <div class="card-header">
                    <h5> Services
                    <a href="add_services.php" class="btn btn-dark float-end">Add Services</a>
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
                              
                            
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>

<?php include('includes/footer.php'); ?>