$(document).ready(function(){

    $('.check_email').keyup(function (e) {

        var email = $('.check_email').val();
        //alert email
        $.ajax({
            type: "POST",
            url: "sign_up-func.php",
            data: {
                    "check_submit_btn" : 1,
                    "email_id": email,
            },
            success: function(response) {
                // alert(email);
                $('.error_email').text(response);
            }

        })

    })


})
