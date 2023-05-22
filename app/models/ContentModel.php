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

    public function getContentBasedOnUrl($url)
    {
        $sql = "SELECT url,
                       pageText
                FROM   Content
                WHERE  url = :u";

        $this->db->query($sql);
        $this->db->bindValue(":u", $url);
        return $this->db->result();
    }
    public function createContent($url, $data)
    {
        $sql = "INSERT INTO Content (url, pageText) VALUES (:url, :pgtxt)";
        $this->db->query($sql);
        $this->db->bindValue(':url', $url);
        $this->db->bindValue(':pgtxt', $data);
        return $this->db->result();
    }
    public function updateContent($url, $data)
    {
        $sql = "UPDATE Content
                SET pageText=:pgtxt
                WHERE url=:url";
        $this->db->query($sql);
        $this->db->bindValue(":pgtxt", $data);
        $this->db->bindValue(":url", $url);
        return $this->db->result();
    }
    public function getAllContent()
    {
        $sql = "SELECT url,
                       pageText
                FROM   Content";

        $this->db->query($sql);
        return $this->db->resultSet();
    }
}
