<?php

// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require __DIR__ . '/vendor/autoload.php';

use Twilio\Rest\Client;

// Find your Account SID and Auth Token at twilio.com/console
// and set the environment variables. See http://twil.io/secure
$sid = "ACec75830d26f87119284c484ace72cde7";
$token = "687594f6c1d59f60f2e075bf4d380bad";
$twilio = new Client($sid, $token);

 $message = $twilio->messages
                  ->create("+639393025086", // to
                           [
                               "body" => $_POST['message'],
                               "from" => "+12294045569"
                           ]
                  );

header("Location: msg.php?sent"); 

?>