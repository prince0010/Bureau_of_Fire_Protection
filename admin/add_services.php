<?php

    $pageTitle = "BFP || Add Services";

include('includes/header.php'); ?>

    <div class="row">
        <div class="col-md-121">
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

                        <div class="mb-3">
                            <label> Service Name</label>
                            <input type="text" name = "name" required class="form-control">
                        </div>
                        
                        <div class="mb-3">
                            <label> Small Description</label>
                            <textarea name="small_desc" rows="3" class="form-control"></textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label> Long Description</label>
                            <textarea name="long_desc" rows="3" class="form-control"></textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label> Upload Service Image</label>
                            <input type="file" name ="image" class="form-control">
                        </div>
                        

                        <h5>SEO Tags</h5>

                        <div class="mb-3">
                            <label> Meta Title</label>
                            <input type="text" name = "meta_title" required class="form-control">
                        </div>

                        <div class="mb-3">
                            <label> Meta Description</label>
                            <textarea name="meta_description" rows="3" class="form-control"></textarea>
                        </div>

                        <div class="mb-3">
                            <label> Meta Keyword</label>
                            <textarea name="meta_keyboard" rows="3" class="form-control"></textarea>
                        </div>

                        <div class="mb-3">
                            <label> Status (Checked = hidden , Unchecked = visible)</label>
                            <br/>
                            <input type="checkbox" name = "status" style = "width:30px;height:30px;">
                        </div>

                        <div class="mb-3">
                            <button type = "submit" name = "save_service" class="btn btn-dark">Save</button>
                        </div>

                       </form>
                </div>
            </div>
        </div>
    </div>

<?php include('includes/footer.php'); ?>