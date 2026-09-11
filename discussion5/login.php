<?php

$username = "jacobsupplee";
$password = "qwerty1234";

if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) {

    if ($_SERVER['PHP_AUTH_USER'] === $username &&
        $_SERVER['PHP_AUTH_PW'] === $password) {

        $message = "Welcome " . htmlspecialchars($_SERVER['PHP_AUTH_USER']);
        $submessage = "You are now logged in.";

    } else {

        $message = "Invalid username/password combination.";
        $submessage = "";

    }

} else {

    header('WWW-Authenticate: Basic realm="Discussion 5"');
    header('HTTP/1.1 401 Unauthorized');

    $message = "Please enter your username and password.";
    $submessage = "";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Discussion 5 - HTTP Authentication</title>
    <link rel="stylesheet" href="../design.css">
</head>

<body>

    <div class="login-box">
        <h1><?php echo $message; ?></h1>

        <?php if ($submessage !== ""): ?>
            <p><?php echo $submessage; ?></p>
        <?php endif; ?>
    </div>

</body>
</html>