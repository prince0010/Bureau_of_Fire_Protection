<?php

use Infobip\Configuration;
use Infobip\Api\SmsApi;
use Infobip\Model\SmsDestination;
use Infobip\Model\SmsTextualMessage;
use Infobip\Model\SmsAdvancedTextualRequest;

require __DIR__ . "/vendor/autoload.php";

$number = $_POST['phone_num'];
$smsessage = $_POST['message_status'];

    if($_POST["provider"] === "infobip") {

    
        $base_url = "n8d4xe.api.infobip.com";
        $api_key = "bdbffe21632c406a7860f50a0c924cdb-96206200-a4c2-4fa6-b815-23efc671e173";
        
        $configuration = new Configuration(host: $base_url, apiKey: $api_key);

        $api = new SmsApi(config: $configuration);

        $destination = new SmsDestination(to: $number);

        $message = new SmsTextualMessage(
            destinations: [$destination],
            text: $smsessage,
            from: "Bureau of Fire Protection"
        );

        $request = new SmsAdvancedTextualRequest(messages: [$message]);

        $response = $api->sendSmsMessage($request);


        }

        echo "Message sent.";


// require_once "vendor/autoload.php"; 
// use Twilio\Rest\Client;

// $account_sid = "YOUR_TWILIO_ACCOUNT_SID";
// $auth_token = "YOUR_TWILIO_AUTH_TOKEN";
// $twilio_phone_number = "YOUR_TWILIO_PHONE_NUMBER";

// $client = new Client($account_sid, $auth_token);

// $client->messages->create(
//     'DESTINATION_PHONE_NUMBER',
//     array(
//         "from" => $twilio_phone_number,
//         "body" => "Hi, This is Bureau of Fire Protection. We want to remind you that the processing for 
//         "
//     )
// );

?>