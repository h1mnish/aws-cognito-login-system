<?php
session_start();

require 'config.php';

session_destroy();

$logoutUrl = COGNITO_DOMAIN .
"/logout?client_id=" . CLIENT_ID .
"&logout_uri=" . urlencode("https://h1mnish-login.duckdns.org");

header("Location: " . $logoutUrl);
exit;
?>
