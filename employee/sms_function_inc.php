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
        $api_key = "0ac4ad78c6b252b017597736de7e9775-3fff9469-17e1-45e5-bcaa-dd19677fada1";

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
        msg_send = '3',
        status = '3'
        WHERE 
        id = '$req_id'
          ";
    $result = mysqli_query($conn, $query);
    if ($result) {
        redirect('denied_io.php', 'SMS Message Sent. ');
    } else {
        redirect('denied_io.php', 'Something Went Wrong. ', 'danger');
    }
  
}
