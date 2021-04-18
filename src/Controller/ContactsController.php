<?php

declare(strict_types = 1);

require_once('./Model/ContactsManager.php');

class ContactsController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render() 
    {

        //this is just example code, you can remove the line below
        $result = new ContactsManager();

        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view
        require('./View/contacts.php');
    }
}

