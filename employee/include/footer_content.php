
<div class="container">
        <div class="row">
            <div class="col-md-7" style = "margin-left: -380px; margin-top: 20px; color:black;">
                <h4 class="footer-heading"><?= webSetting('title') ?? 'BFP || Bureau of Fire Protection'; ?></h4>
            <hr class = "bg-dark">
            <p>
            <?= webSetting('sdescription') ?? 'Meta Description'; ?>
        </p>
        <hr class = "bg-dark">
        </div>
      
        <div class="col-md-7" style = "margin-left: 100px; margin-top: 25px; color:black;">
            <h4 class="footer-heading">Contact Information</h4>
        <div class="row"> 
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

</div>