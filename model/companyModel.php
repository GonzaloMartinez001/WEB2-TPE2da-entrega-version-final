<?php

namespace model;

use PDO;

class companyModel
{
    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;'.'dbname='.DB_NAME.';charset=utf8', DB_USER_NAME, DB_PASSWORD);
    }

    function getCompany() {
        $select= $this->db->prepare("SELECT * FROM company");
        $select->execute();
        $company = $select->fetchAll(PDO::FETCH_OBJ);
        return $company;
    }

    function getGamesandCompany() {
        $select= $this->db->prepare("SELECT * FROM games INNER JOIN company ON games.company_ID = company.company_ID;");
        $select->execute();
        $games = $select->fetchAll(PDO::FETCH_OBJ);
        return $games;
    }

    function insertCompany($companyName){
        $select= $this->db->prepare('INSERT INTO company(company_ID, company_name) VALUES (NULL,?)');
        $select->execute([$companyName]);
    }

    function deleteCompany($id){
        $select = $this->db->prepare('DELETE FROM company WHERE company_ID=?');
        $select->execute([$id]);
    }

    function editCompany($company_ID, $companyName){
        $select = $this->db->prepare('UPDATE company SET company_name = ? WHERE company_ID = ?');
        $select->execute([$companyName, $company_ID]);
    }

    function getCompanyByID($id) {
        $select = $this->db->prepare("SELECT * FROM company WHERE company_ID = ?");
        $select->execute([$id]);
        $company = $select->fetch(PDO::FETCH_OBJ);
        return $company;
    }

}
