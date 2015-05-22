<?php
require_once 'Log.php';

class Auth
{
    public static $usersArray = [
        'guest' => '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm',
         'KB' => '$2y$10$CkIhV12DJSD3IoZG2lckKu6ejJvQOC2fMxdPAdp/s789PgcqDnA9i',
         'Keyasha' => '$2y$10$W0b/Q/VN7Jd3FoXqtDPtJ.VNZ0UNN/UQsS5Kq9ou5PgPwn3Nd8/tq'
     ];

    public static function attempt($username, $password)
    {
         // where I have Auth::$hash I will need to check across Auth::$hashedPasswordsArray
        // where $username =='guest' will need to check across Auth::$usersArray
        // can only iterate across an array, so will need a foreach??
        foreach (self::$usersArray as $key => $value) 
        {
             if ($username == $key && password_verify($password, $value))
             {
                $_SESSION['LOGGED_IN_USER'] = $username;
                $firstLogin = new Log('login');
                $firstLogin->logInfo("User $username logged in.");
                return true;
            }
             
        }

        $failedLogin = new Log('login');
        $failedLogin->logError("User $username failed to login correctly.");
        return false;

        
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
          
        $userLogout = new Log('logout');
        $userLogout->logInfo("User has logged out.");


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