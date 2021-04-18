<?php

declare(strict_types=1);

require_once('Manager.php');

class CompaniesManager extends Manager
{
public function getCompanies(){
    $db = $this->connectDb();

    $result = $db->query("SELECT companyName, VAT, country, companyType FROM Company ORDER BY id ASC");

    return $result->fetchAll();
}

}