<?php
declare(strict_types = 1);

require_once('./Model/LoginManager.php');

class LoginController
{
    public function render(array $GET, array $POST)
    {
       
        $login = new LoginManager();


        function checkInput($var)
        {
            $var = trim($var);
            $var = stripslashes($var);
            $var = htmlspecialchars($var);
            return $var;
        }

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $success = true;

            $username = checkInput($_POST["username"]);
            $password = checkInput($_POST["pass"]);
            $data = $login->getLogin($username);

            if (!isset($registerMail) || empty($registerMail)) {
                $success = false;
                echo "Please enter your email address to log-in";
            }

            if(!isset($password) || empty($password)){
                $success = false;
                echo "Please enter your password";
            }

            
        }


        require('./View/login.php');
    }
}