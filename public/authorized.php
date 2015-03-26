<?php
require_once '../Auth.php';
require_once '../Input.php';

session_start();

if (Auth::check()) {
    echo "Welcome, ". Auth::user();
    
} else {
    header("Location:login.php");
    exit();
    
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
