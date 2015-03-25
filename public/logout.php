<?php
require_once 'Auth.php';
require_once 'Input.php';

session_start();
var_dump($_SESSION);
var_dump(session_id());

if (!empty($_SESSION['LOGGED_IN_USER'])) {
    // end the current session    
    endSession();
    header("Location:login.php");
    exit();
    
}

  function endSession()
{
    // Unset all of the session variables.
    $_SESSION = array();

    // If it's desired to kill the session, also delete the session cookie.
    // Note: This will destroy the session, and not just the session data!
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    // Finally, destroy the session.
    session_destroy();
}
?>