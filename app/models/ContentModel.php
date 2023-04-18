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

    public function getContentBasedOnUrl($url) {
        $sql = "SELECT url,
                       pageText
                FROM   Content
                WHERE  url = :u";

        $this->db->query($sql);
        $this->db->bindValue(":u", $url);
        return $this->db->result();
    }
}