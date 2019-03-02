<?php
// API key
$apiKey = 'CODEX@123';

// API auth credentials
$apiUser = "admin";
$apiPass = "1234";

// Specify the ID of the user
$userID = 1; 

// API URL
$url = 'http://www.azillesoft.com/estateguruapi/index.php/api/authentication/user/'.$userID;

// Create a new cURL resource
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-API-KEY: " . $apiKey));
curl_setopt($ch, CURLOPT_USERPWD, "$apiUser:$apiPass");

$result = curl_exec($ch);

// Close cURL resource
curl_close($ch);
print_r($result);