<?php
require_once "vendor/autoload.php";

$client = new \Contentful\Delivery\Client('QO1APueMQ8xDusZW0n9LqgFsJwYzr4ietKlqo1SBIGA', 'hmai60ni45fc');

echo "HTTP_HOST: " . $_SERVER["HTTP_HOST"]; 
echo "<br>";
echo "SERVER_NAME: " . $_SERVER["SERVER_NAME"]; 


// $entries = $client->getEntries();
// echo $entries->getTotal();
