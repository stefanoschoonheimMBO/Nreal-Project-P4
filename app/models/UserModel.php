<?php

class UserModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getUserBasedOnPasswordAndEmail(string $email, string $passwd)
    {
        $sql = "SELECT id, email, password FROM Users WHERE email = :email";

        $this->db->query($sql);

        $this->db->bindValue(":email", $email);
        $user = $this->db->result();
        if (!$user) {
            return;
        }
        if (password_verify($passwd, $user->password)) {
            return $user;
        }
        return;
    }
}
