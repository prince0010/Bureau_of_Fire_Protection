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
             
                <div class="card-body">
                <div class=" text-center">
                    <a href="form_request.php?id=<?= $_SESSION["loggedInUser"]['id'] ?>" class="btn btn-dark p-4">Fill Up</a> 
                    </div>
                       <hr class = "bg-dark">
                       <h5 class = "mx-2 my-4" style="font-weight: bold;"> Status</h5>
                       <table id = "myTable" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th class="text-center ">Name</th>
                        <th class="text-center ">Business Name</th>
                        <th class="text-center ">Date</th>
                        <th class="text-center ">Phone Number</th>
                        <th class="text-center ">Barangay</th>
                        <th class="text-center ">Address</th>
                        <th class="text-center ">Landmark</th>
                        <th class="text-center ">Scheduled Date</th>
                        <th class="text-center ">Status</th>
                        <th class="text-center ">Action</th>
                    </tr>
                    </thead>
            <?php
            $id = $_SESSION["loggedInUser"]['id'];
            // $services = getAll('request');
           $services = mysqli_query($conn, "SELECT rqt.* FROM request rqt WHERE rqt.user_id = $id ORDER by id DESC ");
                if (mysqli_num_rows($services) > 0) {
                        ?>
                     <tbody>
                     <?php
                   foreach ($services as $servicesItem) {
                                ?>
                    <tr>
                        <td class="text-center py-3"> <?= $servicesItem['owner_name']?> </td>
                        <td class="text-center py-3"> <?= $servicesItem['business_name']?> </td>
                        <td class="text-center py-3"> <?= $servicesItem['date']?> </td>
                        <td class="text-center py-3"> <?= $servicesItem['phone_num']?> </td>
                        <td class="text-center py-3"> <?= $servicesItem['barangay']?> </td>
                        <td class="text-center py-3"> <?= $servicesItem['address']?> </td>
                        <td class="text-center py-3"> <?= $servicesItem['landmark']?> </td>
                        <td class="text-center py-3">  
                            <?php 
                            if ($servicesItem['inspector_sched'] == '0'){
                                echo '<span class = "badge bg-dark text-white"> TBA </span>';
                            } 
                            else{
                                echo $servicesItem['datetime_local']; 
                            }?>
                              </td>

                              <td class="text-center py-3"> 
                                <?php 

                                   if($servicesItem['reschedule_update'] == '1'){
                                        echo '<span class = "badge bg-info"> The Scheduled date<br/>  is Re-scheduled <br/>by the Inspector </span>' ;
                                    }
                                    elseif($servicesItem['status'] == '0'){
                                        echo '<span class = "badge bg-dark text-white"> Employee is Checking<br /> your Request </span>';
                                    }
                                    elseif($servicesItem['status'] == '1'){
                                        echo '<span class = "badge bg-dark text-white"> Admin <br/> is Checking<br /> your Request </span>';
                                    }
                                    elseif($servicesItem['status'] == '2'){
                                        echo '<span class = "badge bg-success text-white"> Admin <br/> is Confirmed<br /> your Request </span>';
                                    } 
                                    elseif($servicesItem['status'] == '3'){
                                        echo '<span class = "badge bg-danger"> Your Form is  <br/>Rejected! Do Re-Check   </span>' ;
                                    } 
                                    elseif($servicesItem['status'] == '4'){
                                        echo '<span class = "badge bg-info"> Done Re-input <br/> the Data  <br />the form </span>' ;
                                    } 
                               
                                    else{
                                        echo '<span class = "badge bg-danger"> "There is Something Wrong!" </span>' ;

                                    }
                                ?> 
                            
                            </td>
                              <td class="text-center">
                                <?php
                                // if($servicesItem['status'] == '3' ||$servicesItem['denied_remarks_IO'] != '0' || $servicesItem['denied_owner_name'] != '0' || $servicesItem['denied_business_name'] != '0' || $servicesItem['denied_address'] != '0' || $servicesItem['denied_phone_num'] != '0' || $servicesItem['denied_upload_permit'] != '0' || $servicesItem['denied_purpose_info'] != '0' ||
                                // $servicesItem['denied_landmark'] != '0' || $servicesItem['denied_barangay'] != '0' || $servicesItem['denied_remarks'] != '0' || $servicesItem['denied_inspection_name'] != '0' || $servicesItem['denied_proceed_info'] != '0' || $servicesItem['denied_duration'] != '0'){
                                if(($servicesItem['status'] != '3')){
                             ?>
                                    <a href="view_request.php?id=<?= $servicesItem['id']?>" class = "btn btn-blue btn-xs"><i style="font-size:17px" class="fa fa-eye"></i></a>
                               <!-- <a href="edit_request.php?id=<?= $servicesItem['id'] ?>" class="btn btn-success btn-xs"><i style="font-size:17px" class="fa fa-edit"></i></a> -->
                            <?php
                                }  
                                
                                else{
                                ?>
                                <a href="denied_fille.php?id=<?= $servicesItem['id']?>" class = "btn btn-danger btn-xs"><i style="font-size:17px" class="fa fa-warning"></i></a>
                                    <a href="view_request.php?id=<?= $servicesItem['id']?>" class = "btn btn-blue btn-xs"><i style="font-size:17px" class="fa fa-eye"></i></a>
                               <a href="edit_request.php?id=<?= $servicesItem['id'] ?>" class="btn btn-success btn-xs"><i style="font-size:17px" class="fa fa-edit"></i></a>
                              
                        </td>
                                    <?php
                            }}
                        }
                            else{
                                echo 'No Data Record Found';
                            }
                  ?>
                                                  
                    </tr>
                    
                    </tbody>
                        </table>
                        </div>
</div>
          </div>
</div>
        

<?php include('include/scripts.php');?>