<?php
declare(strict_types=1);

require_once('Manager.php');

class LoginManager extends Manager
{
    // all companies
    public function getLogin($username)
    {
        $db = $this->connectDb();

        try {
            $result = $db->prepare("SELECT * FROM Users WHERE username = :username");
            $result->execute(["username"=>$username]);
            return $result -> fetch();
        
        } catch (Exception $e) {
            die("Error : " . $e->getMessage());
        }
    }

}