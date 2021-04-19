<?php
declare(strict_types=1);

//include all your controllers here

require './Controller/LoginController.php';
require './Controller/HomepageController.php';
require './Controller/InvoicesController.php';
require './Controller/CompaniesController.php';
require './Controller/ContactsController.php';
require './Controller/RegisterController.php';
require './Controller/AddContactController.php';

//Your index is your Router. You could write a simple IF here based on some $_GET or $_POST vars, to choose your controller



$controller = new HomepageController();

if(isset($_GET['link']) && $_GET['link'] === 'invoices'){
    $controller = new InvoicesController();
} elseif (isset($_GET['link']) && $_GET['link'] === 'companies'){
    $controller = new CompaniesController();
} elseif (isset($_GET['link']) && $_GET['link'] === 'contacts'){
    $controller = new ContactsController();
} elseif (isset($_GET['link']) && $_GET['link'] === 'login'){
    $controller = new LoginController();
} elseif (isset($_GET['link']) && $_GET['link'] === 'register'){
    $controller = new RegisterController();
} elseif (isset($_GET['link']) && $_GET['link'] === 'addContact') {
    $controller = new AddContactController();
}

$controller->render($_GET,$_POST);
