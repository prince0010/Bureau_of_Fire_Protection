<?php

$pageTitle = "BFP || View Request";

include('includes/header.php');

?>


<?php
// we need to check if the ID is available or not, existed or not, or ID is given or not, or if ID is integer or not Integer
$paramResult = checkParamId('id');
//    if the ParamResultID is not numeric type then
if (!is_numeric($paramResult)) {
    // This will check if the parameter data is correctly given or not
    // it will echo either it will $_GET the user id or it will echo the "No ID Found" or "No Id Given"
    echo '<h5>' . $paramResult . '</h5>';
    return false;
}

// we will get the single record from the database by using parameter value
// Database table and the Id that has beING CHECKED

$user = getByID('inspection_order', checkParamId('id'));
// If its status == 200 then it means they found a data in the database table, its chgecking every data by ID of that datatable
if ($user['status'] == 200) {
?>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3> View Form
                        <a href="inspection_order.php?=<?= $user['data']['id'] ?>" class="btn btn-dark float-end"> Back </a>
                    </h3>
                    <hr class="bg-dark">

                </div>
                <div class="card-body">
                    <h3>View Inspection Order</h3>
                    <div id="alertmessage">
                        <?= alertMessage(); ?>
                    </div>
                    <form action="function.php" method = "POST">
                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <td>
                                    To
                                </td>
                                <td>
                                    <?= $user['data']['inspection_name']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Proceed
                                </td>
                                <td>
                                    <?= $user['data']['proceed_info']; ?>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    Purpose
                                </td>
                                <td>
                                    <?= $user['data']['purpose_info']; ?>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    Duration
                                </td>
                                <td>
                                    <?= $user['data']['duration']; ?>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    Remarks
                                </td>
                                <td>
                                    <?= $user['data']['remarks']; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="submit" class =" btn btn-dark" name= "adminConf" >Confirm</button>
                </div>
                </form>
            </div>
        </div>
    </div>

<?php
} else {
    echo '<h5>' . $user['message'] . '</h5>';
}
?>



<?php include('includes/footer.php') ?>