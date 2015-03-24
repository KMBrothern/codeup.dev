<?php

session_start();

if (empty($_SESSION['LOGGED_IN_USER'])) {
    header("Location:login.php");
    exit();
} else {
    echo "Welcome, ". $_SESSION['LOGGED_IN_USER'];
}

var_dump($_SESSION);
var_dump(session_id());
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h1>You are <strong>Authorized</strong></h1>
<a href="logout.php">LOGOUT</a>
</body>
</html>
