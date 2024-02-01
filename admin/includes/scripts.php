<!--   Core JS Files   -->
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>

<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="assets/js/plugins/chartjs.min.js"></script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>

<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
  <script>
    $(document).ready( function () {
      $('#myTable').DataTable();
    });
  </script>
  
<script>

  setTimeout(function () {
  document.getElementById('alertmessage').remove();
  }, 2000);
</script>

 
   
      

<div class="bg-dark " style=" position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  color: white;
  text-align: center;">
   <div class="copyright text-center  text-xs text-muted text-xs-start " style = "position: fixed;  bottom:0;"> 
               
              
           
                <a  class="font-weight-bold text-white" target="_blank"> 
                   © <script >
                  document.write(new Date().getFullYear())
                </script> Bureau of Fire Protection</a>
              </div>

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


<script>
//    $(function(){
//     var dtToday = new Date();

//     var month = dtToday.getMonth() + 1;
//     var day = dtToday.getDate();
//     var year = dtToday.getFullYear();

//     if(month < 10)
//         month = '0' + month.toString();
//     if(day < 10)
//         day = '0' + day.toString();

//     var maxDate = year + '-' + month + '-' + day;    
//     $('#txtDate').attr('max', maxDate);
// });

// var today = new Date();
// var dd = today.getDate(); //Current day
// var mm = today.getMonth() + 1; //January is 0!
// var yyyy = today.getFullYear(); //(Year is 2022)
// var hh = today.getHours(); //Current hour
// var m = today.getMinutes(); //Current minutes

// if (dd < 10)
// {
//     dd = '0' + dd;
// }
// if (mm < 10) 
// {
//     mm = '0' + mm;
// }

// today_min = `${yyyy}-${mm}-${dd}T10:00`;
// today_max = `${yyyy}-${mm}-${dd}T11:30`;
// today_min2 = `${yyyy}-${mm}-${dd}T15:01`;
// today_max2 = `${yyyy}-${mm}-${dd}T15:30`;
// //or Year-Month-Day
// document.getElementById("datefield").setAttribute("min", today_min);
// document.getElementById("datefield").setAttribute("max", today_max);
//Set "datefield" = Minimum&Maximum time to current date

// document.addEventListener("DOMContentLoaded", function() {
//     // Get the current date
//     var currentDate = new Date();

//     // Calculate the date two days from now
//     currentDate.setDate(currentDate.getDate() + 1);

//     // Format the date in a way that date input accepts
//     var minDate = currentDate.toISOString().slice(0, 10);

//     // Set the min attribute of the date input
//     document.getElementById("datepicker").max = minDate;
// });
var currentDate = new Date();

// Calculate the next two days
var nextDay = new Date(currentDate);
nextDay.setDate(currentDate.getDate() + 1);

var dayAfterNext = new Date(currentDate);
dayAfterNext.setDate(currentDate.getDate() + 3);

// Format the dates to match the datetime-local input format
var formattedNextDay = nextDay.toISOString().slice(0, -8);
var formattedDayAfterNext = dayAfterNext.toISOString().slice(0, -8);

// Set the min and max attributes of the input element
document.getElementById("datetime").setAttribute("min", formattedNextDay);
document.getElementById("datetime").setAttribute("max", formattedDayAfterNext);
                                </script>

</body>
</html>