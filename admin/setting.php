<?php include('includes/header.php');?>

<div class="row">
<div class="col-md-12 ">
        <div class="card">
            <div class="card-header">
                <h4>Website Settings</h4>
            </div>
            <div class="card-body">

            <div id ="alertmessage">
                            <?= alertMessage(); ?>
                        </div>

        <form action="function.php" method = "POST">

        <?php
        // the 'id' is 1 only since in this one tehre is only 1 id and 1 data only no more other data can be inserted on this one
            $settings = getByID('settings', 1);
        ?>
        <!-- ang $settings['data']['id'] this means kay if naa nay data sa settings sa database table then ipang display niya to tanan sa settings panel ui else (??) if wala pay data the basahon ni niya ang 'insert' which is naa sa function.php pag 'insert' and 
        ang 'insert' is a static value for this one 
    ang mabasahan then it means mag insert pa og data sa Settings panel ui og wala pay data sa database table na settings -->
        <input type="hidden" name = "settingID" value = "<?= $settings['data']['id'] ?? 'insert' ?>" />

    <div class="mb-3">
        <label> Title</label>
        <input type="text" name = "title" value = "<?= $settings['data']['title'] ?? "" ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label> Website Name </label>
        <input type="text" name = "web_name" value = "<?= $settings['data']['web_name'] ?? "" ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label> Domain </label>
        <input type="text" name = "domain" value = "<?= $settings['data']['domain'] ?? "" ?>" class="form-control">
    </div>

    <div class="mb-3">
        <label> Small Description</label>
        <input type="text" name = "sdescription" value = "<?= $settings['data']['sdescription'] ?? "" ?>" class="form-control">
    </div>

    <h4 class = "my-3">SEO Settings</h4>
    <div class="mb-3">
        <label> Meta Description</label>
        <textarea name="mdescription" rows="3" class="form-control"><?= $settings['data']['mdescription'] ?? "" ?></textarea>
    </div>
    <div class="mb-3">
        <label> Meta Keyword</label>
        <textarea name="mkeyword" rows="3" class="form-control"><?= $settings['data']['mkeyword'] ?? "" ?></textarea>
    </div>

    <h4 class = "my-3">Contact Information</h4>
    <div class="row">
        <div class="col-md-6 mb-3">
            <label> Email 1 </label>
            <input type="email" name = "email1" class="form-control" value = "<?= $settings['data']['email1'] ?? "" ?>" placeholder = "Email Address">
        </div>

        <div class="col-md-6 mb-3">
            <label> Email 2</label>
            <input type="email" name = "email2" class="form-control" value = "<?= $settings['data']['email2'] ?? "" ?>" placeholder = "Email Address">
        </div>
        <div class="col-md-6 mb-3">
            <label> Phone Number 1 </label>
            <input type="text" name = "phone1" class="form-control" value = "<?= $settings['data']['phone1'] ?? "" ?>" placeholder = "Phone Number">
        </div>

        <div class="col-md-6 mb-3">
            <label> Phone Number 2</label>
            <input type="text" name = "phone2" class="form-control" value = "<?= $settings['data']['phone2'] ?? "" ?>" placeholder = "Phone Number">
        </div>

        <div class="col-md-12 mb-3">
            <label> Address</label>
            <textarea name="address" rows="3" class="form-control"><?= $settings['data']['address'] ?? "" ?></textarea>
        </div>
    </div>

        <div class="mb-3">
            <button type = "submit" name = "saveSettings" class="btn btn-dark">Save Settings</button>
        </div>
        </form>
            </div>
        </div>
</div>
</div>


<?php include('includes/scripts.php'); ?>