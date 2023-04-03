<?php

class CountryModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function create() {
        $sql = "CREATE TABLE IF NOT EXISTS `Country` (
            `Id` smallint UNSIGNED NOT NULL AUTO_INCREMENT,
            `Naam` varchar(200) NOT NULL,
            PRIMARY KEY (`Id`)
          ) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
        ";

        $this->db->query($sql);
        $this->db->execute();
    }

    public function getCountries()
    {
        $sql = "SELECT  Id
                       ,Naam
                FROM   Country";

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}