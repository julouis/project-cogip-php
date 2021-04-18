<?php

declare(strict_types=1);

require_once('Manager.php');

class RegisterManager extends Manager
{
    // all companies
    public function setRegister()
    {


        $registerMail = $_POST["registerMail"];
        $registerPassword = $_POST['registerPassword'];
        $passWordConfirmation = $_POST['confirmPassword'];

        $db = $this->connectDb();

        if (isset($_POST['createButton'])) {
            $test = "BUTTON CLICK";
            if ($registerPassword == $passWordConfirmation) {
                $req = $db->prepare("INSERT INTO Users(username, pass) VALUE(:username, :pass)");
                $req->execute(array(
                    'username' => $registerMail,
                    'pass' => $registerPassword
                ));
            } else {
                $passwordsNotCorresponding = "Les mots de passent ne correspondent pas";
            }
        }
    }
}
