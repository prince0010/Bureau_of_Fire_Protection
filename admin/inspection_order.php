<?php

    $pageTitle = "BFP || Services";

include('includes/header.php'); ?>

    <div class="row">
        
    <div class="col-md-12">
            <div class="card">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5> Inspectors Data
                    <div class="col-md-7 float-end">
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
                        <a href = "inspection_order.php" class = "btn btn-danger">Reset</a>
                    </div>
                </div>
            </form>
        </div>
                    </h5>
                   
                    
                </div>
                <div class="card-body">

                <div id ="alertmessage">
                            <?= alertMessage(); ?>
                        </div>

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class = "text-center">to</th>
                                    <th class = "text-center">Proceed</th>
                                    <th class = "text-center">Purpose</th>
                                    <th class = "text-center">Duration</th>
                                    <th class = "text-center">Remarks or Additional Instruction</th>
                                    <th class = "text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                   $services = getAll('inspection_order');
                                   if($services)
                                   {

                                   if(mysqli_num_rows($services) > 0)
                                   {
                                            foreach($services as $servicesItem)
                                            {
                                                ?>
                                           <tr>
                                            <td class = "text-center"><?= $servicesItem['to']?> </span></td>
                                            <td class = "text-center"><?= $servicesItem['proceed']?> </span></td>
                                            <td class = "text-center"><?= $servicesItem['purpose']?> </span></td>
                                            <td class = "text-center"><?= $servicesItem['duration']?> </span></td>
                                            <td class = "text-center"><?= $servicesItem['remarks']?> </span></td>
                                           <!--   <td class = "text-center">
                           <?php
                                  if($servicesItem['status'] == 1){
                                     echo '<span class = "badge bg-danger text-white"> Hidden </span>';
                                     }
                                 else{
                                    echo '<span class = "badge bg-success text-white"> Visible </span>';
                                     }
                                       ?> -->
                            </td>
                                                                
                            <td class = "text-center">
                                        <a  href="edit_inspector_data.php?id=<?= $servicesItem['id']?>" class = "btn btn-success btn-sm"><i style="font-size:17px" class="fa fa-check"></i></a>
                                        <a href="delete_inspector_data.php?id=<?= $servicesItem['id']?>"
                                         class = "btn btn-danger btn-sm mx-2 "
                                         onclick = "return confirm('Are you sure you want to delete this data?')"><i style="font-size:17px" class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                                                 <?php
                                               
                                            }
                                   }
                                }
                                   else{
                                    ?>
                                        <td cosplan = "4" >No Record Found</td>
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