<?php
// API key
$apiKey = 'CODEX@123';

// API auth credentials
$apiUser = "admin";
$apiPass = "1234";

// API URL
$url = 'http://www.azillesoft.com/estateguruapi/index.php/api/authentication/login/';

// User account login info
$userData = array(
    'email' => 'john@example.com',
    'password' => 'login_pass'
);

// Create a new cURL resource
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-API-KEY: " . $apiKey));
curl_setopt($ch, CURLOPT_USERPWD, "$apiUser:$apiPass");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $userData);

$result = curl_exec($ch);

// Close cURL resource
curl_close($ch);
print_r($result);