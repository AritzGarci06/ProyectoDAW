<?php
class CheckLog
{
    public static function login(UserEntity $obj )
    {
        session_start();

        $_SESSION["loggedin"] = true;
        $_SESSION["user_id"] = $obj->user_id;
        $_SESSION["username"] = $obj->username;
        $_SESSION["mail"] = $obj->mail;
        $_SESSION["user_profile"] = $obj->user_profile;
    }
    public static function checkLog()
    {
        session_start();
        return (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]);
    }
    public static function logout()
    {
        session_start();
        $_SESSION = array();
        session_destroy();
    }
    public static function saveURLOrigin()
    {
        session_start();
        $_SESSION["redirect"] = $_SERVER['HTTP_REFERER'];
        $answer = array(
            'status' => 'success',
            'message' => 'Dirección guardad'
        );
        $json_response = json_encode($answer);
        echo $json_response;
    }
}