<?php
declare(strict_types=1);

require_once('Manager.php');

class LoginManager extends Manager
{
    // all companies
    public function getLogin()
    {
        

        $username = $_POST["username"];
        $password = $_POST["passworld"];

        $db = $this->connectDb();

        $db->query("INSERT INTO Users(id, username, pass) VALUE('', $username, $password) ");

        
    }

}