<?php

declare(strict_types=1);

require_once('./Model/RegisterManager.php');

class RegisterController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $_GET, array $_POST)
    {

        $register = new RegisterManager();

        function checkInput($var)
        {
            $var = trim($var);
            $var = stripslashes($var);
            $var = htmlspecialchars($var);
            return $var;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $success = true;
            $registerMail = checkInput($_POST["registerMail"]);
            $registerPassword = checkInput($_POST['registerPassword']);
            $passWordConfirmation = checkInput($_POST['confirmPassword']);

            if (!isset($registerMail) || empty($registerMail)) {
                $success = false;
                echo "Please enter a email address";
            }

            if (!filter_var($registerMail, FILTER_VALIDATE_EMAIL)) {
                $success = false;
                echo "This is not a valid email address";
            }


        /* if ($register->verifyUsername()) {
                $success = false;
                echo "This email address already exists";
            }*/

            if (!isset($registerPassword)||empty($registerPassword)){
                $success=false;
                echo "Please enter a password";
            }

            if ($registerPassword!==$passWordConfirmation){
                $success=false;
                echo "Passwords don't match";
            }

            if($success){
                $register-> setRegister();
            }

        }


        //load the view
        require('./View/register.php');
    }
}
