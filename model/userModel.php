<?php

namespace model;

use PDO;

class userModel
{
    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;'.'dbname='.DB_NAME.';charset=utf8', DB_USER_NAME, DB_PASSWORD);
    }

    function getUserByName($username){
        $select= $this->db->prepare('SELECT * FROM users WHERE username=?');
        $select->execute([$username]);
        return $select->fetchAll(PDO::FETCH_ASSOC);
    }

}
