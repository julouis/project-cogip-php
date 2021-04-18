<?php

declare(strict_types=1);

require_once('Manager.php');

class ContactsManager extends Manager
{
public function getContacts(){
    $db = $this->connectDb();

    $result = $db->query("SELECT contactName, phoneNumber, email, company FROM Contacts ORDER BY id ASC");

    return $result->fetchAll();
}

}