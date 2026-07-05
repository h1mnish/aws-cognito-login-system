<?php
session_start();

if (!isset($_SESSION['id_token'])) {
    header("Location: index.php");
    exit;
}

$parts = explode(".", $_SESSION['id_token']);

$payload = json_decode(base64_decode(strtr($parts[1], '-_', '+/')), true);

$email = $payload['email'] ?? "User";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>

<body style="font-family:Arial;text-align:center;margin-top:100px;">

<h1>Welcome <?php echo htmlspecialchars($email); ?></h1>

<h2>Your Session has been Created!</h2>

<br>

<a href="logout.php">
<button style="padding:12px 30px;">
Logout
</button>
</a>

</body>
</html>
