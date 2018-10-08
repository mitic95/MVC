<?php

namespace App\Controllers;

/**
 * Class Controller
 * @package App\Controllers
 */
abstract class Controller
{
    /**
     * @var array
     */
    protected $data;

    /**
     * Controller constructor.
     */
    public function __construct()
    {
        session_start();
        $this->data["sessionActive"] = isset($_SESSION["login"]) ? true : false;
    }

    /**
     * @param null $email
     * @param null $pass
     * @param null $confirmPass
     */
    public function validate($email = null,$pass = null,$confirmPass = null)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) == true) {
            die('Invalid email!');
        }
        if ($pass !== $confirmPass) {
            die('password not equal to confirm password!');
        }
    }

    /**
     * @param $trim
     * @return string
     */
    public function trim($trim)
    {
        return htmlspecialchars(stripslashes(strip_tags(trim($trim))));
    }
}