<?php
// Require the bundled autoload file - the path may need to change
// based on where you downloaded and unzipped the SDK

require_once('twilio-php-master/Twilio/autoload.php');

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'ACd27bcf2d4530b35d7a76a1a46fd3222f';
$token = '09fe8795b61f238dc908cf5d90859e6e';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+94762928985',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+1 (256) 667-6288 ',
        // the body of the text message you'd like to send
        'body' => "Dear Technician Your Cost Esimation for  ".$_SESSION['user']." reject by Admin please reestimate it"
    )
);
?>
