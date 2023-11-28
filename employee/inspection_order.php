<?php
include('include/header.php');


?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5> Inspection Order
                    <a href="index.php" class="btn btn-dark float-end">Back</a>
                </h5>
            </div>
            <div class="card-body">
                <!-- Alert -->
                <div id="alertmessage">
                    <?= alertMessage(); ?>
                </div>
                <form action="function.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label>To</label>
                        <select name="" id="" class="form-control">
                            <?php

                            $inspec = "SELECT * FROM inspection_order";
                            $inspec_run = mysqli_query($conn, $inspec);
                            if (mysqli_num_rows($inspec_run) > 0) {
                                foreach ($inspec_run as $row) {
                            ?>
                                    <option value="<?= $row['id']; ?>"><?= $row['to']; ?></option>
                                <?php

                                }
                                ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>Proceed</label>

                        <textarea name="proceed" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <div class="mb-3">
                        <label>Purpose</label>
                        <select name="purpose" id="" class="form-control">
                            <?php
                                foreach ($query_run as $row) {
                            ?>
                                <option value="<?= $row['id']; ?>"><?= $row['purpose']; ?></option>
                            <?php

                                }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Duration</label>
                        <select name="duration" id="" class="form-control">
                            <?php
                                foreach ($query_run as $row) {
                            ?>
                                <option value="<?= $row['id']; ?>"><?= $row['duration']; ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Remarks or Additional Instruction </label>
                        <select name="remarks" id="" class="form-control">
                            <?php
                                foreach ($query_run as $row) {
                            ?>
                                <option value="<?= $row['id']; ?>"><?= $row['remarks']; ?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-dark"> Save </button>
                    </div>
                <?php

                            } else {
                ?>
                    <option value=""> No Record Found </option>
                <?php
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