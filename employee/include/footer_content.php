<div class="py-5 bg-white ">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4 class="footer-heading"><?= webSetting('title') ?? 'BFP || Bureau of Fire Protection'; ?></h4>
            <hr class = "bg-dark">
            <p>
            <?= webSetting('sdescription') ?? 'Meta Description'; ?>
        </p>
        <hr class = "bg-dark">
        </div>
        <div class="col-md-6">
            <h4 class="footer-heading">Contact Information</h4>
           <hr class = "bg-dark">
          <p>  &bull; Address: <?= webSetting('address') ?? ''; ?></p>
            <hr class = "bg-dark">
            <p> &bull; Email: <?= webSetting('email1') ?? ''; ?> || <?= webSetting('email2') ?? ''; ?></p>
            <hr class = "bg-dark">
            <p> &bull; Phone: <?= webSetting('phone1') ?? ''; ?> || <?= webSetting('phone2') ?? ''; ?></p>
            <hr class = "bg-dark">
        </div>
    </div>
    </div>

</div>