<div class="sticky-top">
  <div class="bg-dark py-2">
  <div class="container">
    <div class="row">
      <div class="col-md-6 text-white">
       <p class = "text-center my-2"> <strong> Email: </strong> <?=webSetting('email1') ?? ''; ?></p> 
      </div>
      <div class="col-md-6 text-white">
      <p class = "text-center my-2"> <strong> Phone: </strong> <?=webSetting('phone1') ?? ''; ?></p> 
      </div>
      </div>
    </div>
  </div>
</div>


<nav class="navbar navbar-expand-lg bg-white shadow">
  <div class="container">

    <a class="navbar-brand" href="index.php">BFP</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        

    <!-- me-auto = margin-end: auto ; and the ms-auto = margin-start: auto; -->
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

        <li class="nav-item">

          <a class="nav-link " href="index.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="about_us.php">Link</a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link " href="services.php" > Services</a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link " href="contact_us.php" > Contact Us</a>
        </li>
      </ul>
   
    </div>
  </div>
</nav>