<?php


class ContactModel
{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }
    public function createMessageAndEmail(string $name, string $subject, string $message, string $email, bool $createEmail)
    {
        $sql = "INSERT INTO Messages (name, subject, message, email) VALUES (:nm, :sbt, :msg, :eml);";
        if ($createEmail) {
            $sql .= "INSERT INTO Emails (email) VALUES (:eml);";
        }
        $this->db->query($sql);
        $this->db->bindValue(":nm", $name);
        $this->db->bindValue(":sbt", $subject);
        $this->db->bindValue(":msg", $message);
        $this->db->bindValue(":eml", $email);
        $this->db->execute();
    }
}
