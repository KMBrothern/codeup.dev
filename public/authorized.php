<?php
// if (user is not logged in -same session) {
//     header("Location: login.php");
//     exit();
// }else{
//     $message = " You are authorized to view this page";
// }
session_start();
var_dump($_SESSION);
var_dump(session_id());
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h1><strong>Authorized</strong></h1>
</body>
</html>
<!-- Welcome,<?= $message ?> -->