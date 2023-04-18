<?php

class ContentModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getContent()
    {
        $sql = "SELECT  Id
                       ,url
                       ,pageText
                FROM   Content";

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}