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
                    <h5> Send Accepted Message
                    <a href="index.php" class="btn btn-dark float-end">Back</a>
                    </h5>
                   
                </div>
                <div class="card-body">
                    <!-- Alert -->
                <div id ="alertmessage">
                            <?= alertMessage(); ?>
                        </div>

                        <form action="sms_function.php" method = "POST" enctype="multipart/form-data">
                        
                        <div class="mb-3">
                        <input type="hidden" name = "request_Id" value = "<?= $editserv['data']['id']; ?>">
                        
                        <label> Phone Number </label>
                        <!-- <select name="number" id=""  class = "form-control" readonly>
                            <option value="phone_num" name = "phone_num"><?= $editserv['data']['phone_num']; ?></option>
                        </select> -->
                            <input type="text" name = "phone_num" value="<?= $editserv['data']['phone_num'];?>" class="form-control" readonly> 
                        <br />

                      <div class="mb-3">
                        <br />
                        <!-- <?= $dates = date('Y-m-d h:i A', strtotime( $editserv['data']['datetime_local'])); ?> -->
                <label>Message</label>
                <select name="message_status" id="" class = "form-control text-wrap" style ="height:180px" readonly>
                        <option disabled > ---- Accepted ----</option>
                            <!-- <option value=" Hello Gooday Mr/Mrs. <?=$editserv['data']['owner_name'];?>. This is from Nazareth Bureau of Fire Protection. Your request for Fire Safety Inspection Certificate is approved, and the inspection will be on<?= $dates ?>. See you."> Hello Gooday Mr/Mrs. <?=$editserv['data']['owner_name'];?> this is from Nazareth BFP your request for FSIC is approved and the inspection will be on  <?= date('Y-m-d h:i A', strtotime( $editserv['data']['datetime_local'])); ?>, and see you</option> -->
                            <option value=" Hello Gooday Mr/Mrs. <?=$editserv['data']['owner_name'];?>. This is from Nazareth Bureau of Fire Protection. Your request for Fire Safety Inspection Certificate is approved, and the inspection will be on<?= date('Y-m-d h:i A', strtotime( $editserv['data']['datetime_local'])); ?>. See you."> Hello Gooday Mr/Mrs. <?=$editserv['data']['owner_name'];?>. This is from Nazareth Bureau of Fire Protection. Your request for Fire Safety Inspection Certificate is approved, and the inspection will be on<?= date('Y-m-d h:i A', strtotime( $editserv['data']['datetime_local'])); ?>. See you.</option>
                        </select>
                                    </div>

                        <div class="mb-3">
                            <label for="">
                            <input type = "radio" name = "provider" value = "infobip" checked />Infobip
                            </label>

                            <br/>

                            <label for="">
                            <input type = "radio" name = "provider" value = "Twilio" />Twilio
                            </label>

                        </div>

                                    <label> Proceed to Inspection Order? </label>
                                    <hr class = "bg-dark">
                                    <div class="mb-3">
                                <button type="submit" name = "sendBtn" class = "btn btn-dark"> Send </button>
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

<!-- <?php
    include('include/footer.php');

?> -->