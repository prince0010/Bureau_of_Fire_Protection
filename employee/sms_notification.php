<?php
    include('include/header.php');

?>


<div class="row">
        <div class="col-md-12">
            <div class="card">
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

                <div class="card-header">
                    <h5> Inspection Order
                    <a href="confirm_request.php" class="btn btn-dark float-end">Back</a>
                    </h5>
                   
                </div>
                <div class="card-body">
                    <!-- Alert -->
                <div id ="alertmessage">
                            <?= alertMessage(); ?>
                        </div>
                        <form action="function.php" method = "POST" enctype="multipart/form-data">
                        
                        <div class="mb-3">
                                      
                                    <div class="mb-3">
                                        <label>Proceed</label>
                                        <textarea name="proceed" id="" cols="30" rows="10" class = "form-control"></textarea>
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

<?php
    include('include/footer.php');

?>