<?php
require_once 'Log.php';

class Auth
{
    public static $hash = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';

    public static function attempt($username, $password)
    {
         if ($username == 'guest' && password_verify($password, Auth::$hash))
         {
            $_SESSION['LOGGED_IN_USER'] = $username;
        // use Log class to log an info message "User $username logged in."
            $firstLogin = new Log('login');
            $firstLogin->logInfo("User $username logged in.");
            return true;
        } else if($username != 'guest' || !password_verify($password, Auth::$hash))
        // use Log class to log an error message "User $username failed to log in!"
        {
            $firstLogin = new Log('login');
            $firstLogin->logError("User $username failed to log in!");
            return false;
        }
        
    }

    public static function check()
    {
        if (isset($_SESSION['LOGGED_IN_USER'])) 
        {
            return true;
            
        } else{
            return false;
        }
    }

    public static function user()
    {
        // will return the username of the currently logged in user
        if(isset($_SESSION['LOGGED_IN_USER']))
        {
            return $_SESSION['LOGGED_IN_USER'];
        }

    }

    public static function logout()
    {
        // will end the session by first ending the session,
        // then by destroying all traces of the session
         

        $_SESSION = array();

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
}
?>