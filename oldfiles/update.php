<?php
// API key
$apiKey = 'CODEX@123';

// API auth credentials
$apiUser = "admin";
$apiPass = "1234";

// Specify the ID of the user
$userID = 1; 

// API URL
$url = 'http://www.azillesoft.com/estateguruapi/index.php/api/authentication/user/';

// User account info
$userData = array(
    'id' => 1,
    'first_name' => 'John2',
    'last_name' => 'Doe2',
    'email' => 'john2@example.com',
    'password' => 'user_new_pass',
    'phone' => '545-856-3439'
);

// Create a new cURL resource
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-API-KEY: '.$apiKey, 'Content-Type: application/x-www-form-urlencoded'));
curl_setopt($ch, CURLOPT_USERPWD, "$apiUser:$apiPass");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($userData));

$result = curl_exec($ch);

// Close cURL resource
curl_close($ch);
print_r($result);
?>