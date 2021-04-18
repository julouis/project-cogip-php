<?php

declare(strict_types=1);

require_once('Manager.php');

class RegisterManager extends Manager
{
    public function setRegister()
    {

        $db = $this->connectDb();

        try {
            $result = $db->prepare('INSERT INTO `Users` (username, pass) VALUES("'. $_POST["registerMail"] . '", "' . password_hash($_POST["registerPassword"], PASSWORD_DEFAULT) . '")');
            $result->execute();

        } catch (Exception $error) {
            die("Error : " . $error->getMessage());
        }    

    }
}
