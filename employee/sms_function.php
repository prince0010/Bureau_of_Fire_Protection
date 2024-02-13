<?php
require '../config/function.php';

use Infobip\Configuration;
use Infobip\Api\SmsApi;
use Infobip\Model\SmsDestination;
use Infobip\Model\SmsTextualMessage;
use Infobip\Model\SmsAdvancedTextualRequest;

require __DIR__ . "/vendor/autoload.php";


// echo "Message sent.";

if (isset($_POST['sendBtn'])) {
    $req_id = validate($_POST['request_Id']);

    $number = $_POST['phone_num'];
    $smsessage = $_POST['message_status'];
   

    if ($_POST["provider"] === "infobip") {


        $base_url = "n8d4xe.api.infobip.com";
        // $api_key = "bdbffe21632c406a7860f50a0c924cdb-96206200-a4c2-4fa6-b815-23efc671e173";
        $api_key = "9bc6f83f7a473a61e9365a5d588b92ec-83bfe1b6-8cd1-4fb3-a451-acd1154f07d5";

        $configuration = new Configuration(host: $base_url, apiKey: $api_key);

        $api = new SmsApi(config: $configuration);

        $destination = new SmsDestination(to: $number);

        $message = new SmsTextualMessage(
            destinations: [$destination],
            text: $smsessage
        );
        $request = new SmsAdvancedTextualRequest(messages: [$message]);



        $response = $api->sendSmsMessage($request);
    }
        $query = "UPDATE request SET
        msg_send = '1',
        status = '2'
        WHERE 
        id = '$req_id'
          ";
    $result = mysqli_query($conn, $query);
    if ($result) {
        // redirect('sms_confirmation_tag.php?id=' .$req_id, 'SMS Message Sent. ');
        redirect('inspection_order_data.php', 'SMS Message Sent. ');
    } else {
        redirect('sms_notification.php?id=' . $req_id, 'Something Went Wrong. ', 'danger');
    }
  
}
