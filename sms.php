<?php
// Required if your environment does not handle autoloading
require __DIR__ . '/vendor/autoload.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$sid = 'ACc2f0a9e7f82f81fc5488910cf11982b0';
$token = '68927507b65e5f01c6fdc17d7bdd3b4a';
$client = new Client($sid, $token);

// Use the client to do fun stuff like send text messages!
$client->messages->create(
    // the number you'd like to send the message to
    // '+33628840940',
    '+33638697344',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+33644640871',
        // the body of the text message you'd like to send
        'body' => 'Bonjour Thibault, Veillez confirmer votre achat sur la plateforme de Nike avec le code suivant 034802.'
    )
);
