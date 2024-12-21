<?php
require_once "vendor/autoload.php";

$client = new \Contentful\Delivery\Client('QO1APueMQ8xDusZW0n9LqgFsJwYzr4ietKlqo1SBIGA', 'hmai60ni45fc');

echo $_SERVER["HTTP_HOST"]; 

// $entries = $client->getEntries();
// echo $entries->getTotal();
