<?php

declare(strict_types=1);

require_once('Manager.php');

class AddContactManager extends Manager
{
    public function setContact()
    {

        $db = $this->connectDb();

        try {
            $result = $db->prepare('INSERT INTO `Contacts` (contactName, phoneNumber, email, company) VALUES("' . $_POST["addContactName"] . '", "' . $_POST["addContactPhoneNumber"] . '", "' . $_POST["addContactEmail"] . '", "' . $_POST["addContactCompanyName"] . '")');
            $result->execute();
        } catch (Exception $error) {
            die("Error : " . $error->getMessage());
        }
    }
}
