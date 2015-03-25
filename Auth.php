<?php
require_once 'Log.php';

class Auth
{
    public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';

    public static function attempt($username, $password)
    {
        // if ($username == 'guest' && $password == hashed($password))
        // {then set the LOGGED_IN_USER session variable as before}
        // use Log class to log an info message "User $username logged in.;"
        // else if($username != 'guest' || $password != hashed($password))
        // {use Log class to log an error message "User $username failed to log in!";}
        // Will need to use password_verify to check password hash
    }

    public static function check()
    {
        // will check to see if user is logged in
        // if(user is logged in)
        // {return true;}
        // else
        // {return false;}

    }

    public static function user()
    {
        // will return the username of the currently logged in user
        // if(user is logged in)
        // {return $username;}

    }

    public static function logout()
    {
        // will end the session by first ending the session,
        // then by destroying all traces of the session

    }
}
?>