<?php
declare(strict_types=1);

require_once('Manager.php');

class InvoicesManager extends Manager
{
    // all companies
    public function getInvoices()
    {
        $db = $this->connectDb();

        $result = $db->query("SELECT invoiceNumber, invoiceDate, invoiceCompany FROM `Invoice` ORDER BY invoiceDate DESC");

        return $result->fetchAll();
    }

}