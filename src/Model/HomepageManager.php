<?php
declare(strict_types=1);

require_once('Manager.php');

class HomepageManager extends Manager
{
    // last 5 invoices, ordered by date
    public function getLastInvoices()
    {
        $db = $this->connectDb();

        $result = $db->query("SELECT invoiceNumber, invoiceDate, invoiceCompany FROM `Invoice` ORDER BY invoiceDate DESC LIMIT 5");

        return $result->fetchAll();
    }

    /* LAST 5 CONTACTS */

    public function getLastContacts() {
        $db = $this->connectDb();

        $result = $db->query("SELECT contactName, phoneNumber, email, company FROM Contacts ORDER BY id DESC LIMIT 5");

        return $result->fetchAll();
    }

    /* LAST 5 COMPANIES */

    public function getLastCompanies() {
        $db = $this->connectDb();

        $result= $db->query("SELECT companyName, VAT, country, companyType FROM Company ORDER BY id DESC LIMIT 5");

        return $result->fetchAll();

    }

}