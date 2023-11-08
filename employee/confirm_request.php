<?php

    $pageTitle = "BFP || Confirm Request";

include('include/header.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5> Comfirm Request
                    <a href="index.php" class="btn btn-dark float-end">Back</a>
                    </h5>
                   
                </div>
                <div class="card-body">

                <div id ="alertmessage">
                            <?= alertMessage(); ?>
                        </div>

                        <!-- The enctype= "multipart/form-data main attribute to accept the upload image in form submit if not added this it means not uplaod any image -->
                       <form action="function.php" method = "POST" enctype="multipart/form-data">

                       <?php

                        $paraResult = checkParamId('id');
                        if(!is_numeric($paraResult)){
                            echo "<h5>".$paraResult."</h5>";
                            return false;
                        }

                        $editserv = getByID('request', $paraResult);
                        if($editserv){

                            if($editserv['status'] == 200)
                            {
                                ?>

                                <input type="hidden" name = "request_Id" value = "<?= $editserv['data']['id']; ?>">

                                    <div class="mb-3">
                                        <label> Owner Name</label>
                                        <input type="text" name = "name" value="<?= $editserv['data']['owner_name']?>" required class="form-control" readonly>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label> Business Name</label>
                                        <input type="text" name = "name" value="<?= $editserv['data']['business_name']?>" required class="form-control" readonly>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label> Address</label>
                                        <input type="text" name = "name" value="<?= $editserv['data']['address']?>" required class="form-control" readonly>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label> Phone Number</label>
                                        <input type="text" name = "name" value="<?= $editserv['data']['phone_num']?>" required class="form-control" readonly>
                                    </div>
                                  
                                    <div class="mb-3">
                                        <label>Permit</label>
                                        <br/>
                                      <!-- Button trigger modal -->
                 <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#Modal">
                 <i style="font-size:17px" class="fa fa-eye"></i></a>
                            </button>
                        <!-- Modal -->
                        <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="ModalLabel">Upload Permit</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <img src="<?= './'.$editserv['data']['upload_permit'] ?>" style = "width:100%;height:100%;" alt="Image"/>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label>Date Requested</label>
                                        <input type="text" name = "name" value="<?= $editserv['data']['date']?>" required class="form-control" readonly>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label>Landmark</label>
                                        <input type="text" name = "name" value="<?= $editserv['data']['landmark']?>" required class="form-control" readonly>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label>Barangay</label>
                                        <input type="text" name = "name" value="<?= $editserv['data']['barangay']?>" required class="form-control" readonly>
                                    </div>
                                     
                                    <div class="mb-3">
                                        <label>Remarks</label>
                                        <input type="text" name = "name" value="<?= $editserv['data']['remarks']?>" required class="form-control" readonly>
                                    </div>
                                    <br />
                                    <label> Confirmation for Admin Check? </label>
                                    <hr class = "bg-dark">
                                    <div class="mb-3">
                                        <button type = "submit" name = "update_service" class="btn btn-dark" >Confirm</button>
                                    </div>
                        <?php
                            }
                                else{
                                    echo "<h5> No Such Data Found! </h5>";
                                }
                        }
                        else{
                            echo "<h5> Something Went Wrong! </h5>";
                        }

                       ?>

                       </form>
                </div>
            </div>
        </div>
    </div>

<?php include('include/footer.php'); ?>