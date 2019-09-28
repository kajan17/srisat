<?php
// Require the bundled autoload file - the path may need to change
// based on where you downloaded and unzipped the SDK

require_once('twilio-php-master/Twilio/autoload.php');

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'ACa9dd862e7864bc5c22ebd61bd9480b25';
$token = 'd5cace2aabf611885af5a54c74ec4478';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    '+94779591178',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+1 248-791-9364 ',
        // the body of the text message you'd like to send
        'body' => "New Job Waiting For You. Login To See More Details"
    )
);
//include("database/db_conection.php");
 echo "<script>window.open('repaircomplaient.php','_self')</script>";
?>
