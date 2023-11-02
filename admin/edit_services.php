<?php

    $pageTitle = "BFP || Add Services";

include('includes/header.php'); ?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5> Add Services
                    <a href="services.php" class="btn btn-dark float-end">Back</a>
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

                        $editserv = getByID('services', $paraResult);
                        if($editserv){

                            if($editserv['status'] == 200)
                            {
                                ?>

                                <input type="hidden" name = "service_Id" value = "<?= $editserv['data']['id']; ?>">

                                    <div class="mb-3">
                                        <label> Service Name</label>
                                        <input type="text" name = "name" value="<?= $editserv['data']['serv_name']?>" required class="form-control">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label> Small Description</label>
                                        <textarea name="small_desc" rows="3" class="form-control"><?= $editserv['data']['small_desc']?></textarea>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label> Long Description</label>
                                        <textarea name="long_desc" rows="3" class="form-control"><?= $editserv['data']['long_desc']?></textarea>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label> Upload Service Image</label>
                                        <input type="file" name ="image" value="<?= $editserv['data']['service_img']?>" class="form-control">
                                        <br />
                                        <img src="<?= './'.$editserv['data']['service_img'] ?>" style = "width:70px;height:70px;" alt="Image"/>
                                    </div>
                                    

                                    <h5>SEO Tags</h5>

                                    <div class="mb-3">
                                        <label> Meta Title</label>
                                        <input type="text" name = "meta_title" value="<?= $editserv['data']['meta_title']?>" required class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label> Meta Description</label>
                                        <textarea name="meta_description" rows="3" class="form-control"><?= $editserv['data']['meta_description']?></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label> Meta Keyword</label>
                                        <textarea name="meta_keyboard" rows="3" class="form-control"><?= $editserv['data']['meta_keyboard']?></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label> Status (Checked = hidden , Unchecked = visible)</label>
                                        <br/>
                                        <input type="checkbox" name = "status" <?= $editserv['data']['status'] == 1 ? 'checked' : '' ?> style = "width:30px;height:30px;">
                                    </div>

                                    <div class="mb-3">
                                        <button type = "submit" name = "update_service" class="btn btn-dark">Update</button>
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

<?php include('includes/footer.php'); ?>