<?php
require_once '../Auth.php';
require_once '../Input.php';

session_start();
// going to delete to use Auth::check();
if (Auth::check()) 
    {
    header("Location:authorized.php");
    exit();
    } 


$username = Input::has('username') ? Input::get('username') : '';
$password = Input::has('password') ? Input::get('password') : '';

if ($username == '' && $password == '') {
    echo "Please enter your username and password";

} else if(Auth::attempt($username, $password)) {
    // $_SESSION['LOGGED_IN_USER'] = $username;
    header("Location:authorized.php");
    exit();
}else {
    echo "Sorry, login failed.";
}


var_dump($_POST);
var_dump($_SESSION);
var_dump(session_id());
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form method="POST" action ="login.php">
        <label>Username</label>
        <input type="text" name="username"><br>
        
        <label>Password</label>
        <input type="text" name="password"><br>
       
        <input type="submit">
    </form>

</body>
</html>