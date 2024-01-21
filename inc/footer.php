

<div class="bg-dark " style=" position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  color: white;
  text-align: center;">
    <div class="row">
      <div class="col-md-6 text-white">
       <p class = "text-center my-2"> <strong> Email: </strong> <?=webSetting('email1') ?? ''; ?></p> 
      </div>
      <div class="col-md-6 text-white">
      <p class = "text-center my-2"> <strong> Phone: </strong> <?=webSetting('phone1') ?? ''; ?></p> 
      </div>
      </div>
</div>



<script src= "asset/js/jquery-3.7.1.min.js"></script>
    <script src= "asset/js/bootstrap.bundle.min.js"></script>

  <script>
        setTimeout(function () {
        document.getElementById('alertmessage').remove();
        }, 2000);
</script>


</body>
</html>