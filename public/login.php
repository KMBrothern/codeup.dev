<?php


$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';


if ($username == '' && $password == '') {
    echo "Please enter your username and password";

} else if($username == 'guest' && $password == 'password') {
    header("Location: authorized.php");
    exit();

}else {
    echo "Sorry, login failed.";

}



var_dump($_POST);
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