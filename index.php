<?php
require 'config.php';

$loginUrl = COGNITO_DOMAIN .
"/login?client_id=" . CLIENT_ID .
"&response_type=code" .
"&scope=openid+email" .
"&redirect_uri=" . urlencode(REDIRECT_URI);
?>

<!DOCTYPE html>
<html>
<head>
    <title>AWS Cognito Login</title>
</head>

<body style="font-family:Arial;text-align:center;margin-top:100px;">

<h1>AWS Cognito Login System</h1>

<a href="<?php echo $loginUrl; ?>">
    <button
        style="padding:15px 35px;font-size:18px;cursor:pointer;">
        Login with AWS Cognito
    </button>
</a>

</body>
</html>
