<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

require 'config.php';

if (!isset($_GET['code'])) {
    die("Authorization code not received.");
}

$code = $_GET['code'];

$tokenUrl = COGNITO_DOMAIN . "/oauth2/token";

$postFields = http_build_query([
    "grant_type" => "authorization_code",
    "client_id" => CLIENT_ID,
    "client_secret" => CLIENT_SECRET,
    "code" => $code,
    "redirect_uri" => REDIRECT_URI
]);

$ch = curl_init($tokenUrl);

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/x-www-form-urlencoded"
]);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    die("Curl Error: " . curl_error($ch));
}

curl_close($ch);

$data = json_decode($response, true);

if (isset($data['id_token'])) {

    $_SESSION['id_token'] = $data['id_token'];

    header("Location: dashboard.php");
    exit;
}

echo "<pre>";
print_r($data);
echo "</pre>";
?>
