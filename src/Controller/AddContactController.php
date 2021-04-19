<?php

declare(strict_types = 1);

require_once('./Model/AddContactManager.php');

class AddContactController
{
    
    public function render() 
    {
        
        $result = new AddContactManager();

        function checkInput($var)
        {
            $var = trim($var);
            $var = stripslashes($var);
            $var = htmlspecialchars($var);
            return $var;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $success=true;

            if($success){
                $result->setContact();
            }

        }
        
        require('./View/addContact.php');
    }
}