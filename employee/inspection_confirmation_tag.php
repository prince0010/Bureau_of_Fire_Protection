<?php
include('include/header.php');
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <!-- Alert -->
                <?php
                $paraResult = checkParamId('id');
                if (!is_numeric($paraResult)) {
                    echo "<h5>" . $paraResult . "</h5>";
                    return false;
                }
                $editserv = getByID('request', $paraResult);
                if ($editserv) {

                    if ($editserv['status'] == 200) {
                ?>
                        <div id="alertmessage">
                            <?= alertMessage(); ?>
                        </div>
                        <form action="function.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5> Confirmation </h5>
                                            </div>
                                            <div class="card-body">
                                                <div id="alertmessage">
                                                    <?= alertMessage(); ?>
                                                </div>
                                                <div class="text-center">
                                                    <h5>
                                                        Continue to the SMS Message?
                                                    </h5>
                                                    <a href="sms_notification.php?id=<?=$editserv['data']['id']; ?>" class="btn btn-dark p-4">Yes</a>
                                                    <a href="confirm_request.php?id=<?=$editserv['data']['id'];?>" class="btn btn-dark p-4">No</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                    } else {
                        echo "<h5> No Such Data Found! </h5>";
                    }
                } else {
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