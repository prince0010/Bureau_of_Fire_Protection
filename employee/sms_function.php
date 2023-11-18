<?php

require_once "vendor/autoload.php"; 
use Twilio\Rest\Client;

$account_sid = "YOUR_TWILIO_ACCOUNT_SID";
$auth_token = "YOUR_TWILIO_AUTH_TOKEN";
$twilio_phone_number = "YOUR_TWILIO_PHONE_NUMBER";

$client = new Client($account_sid, $auth_token);

$client->messages->create(
    'DESTINATION_PHONE_NUMBER',
    array(
        "from" => $twilio_phone_number,
        "body" => "Hi, This is Bureau of Fire Protection. We want to remind you that the processing for 
        "
    )
);

?>