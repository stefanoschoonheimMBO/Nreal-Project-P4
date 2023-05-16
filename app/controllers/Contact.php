<?php

class Contact extends BaseController
{
    private ContactModel $contactModel;
    public function __construct()
    {
        $this->contactModel = $this->model("ContactModel");
    }
    public function index()
    {
        $data = ["page" => "contact"];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (
                array_key_exists("name", $_POST) &&
                array_key_exists("subject", $_POST) &&
                array_key_exists("message", $_POST) &&
                array_key_exists("email", $_POST)
            ) {
                $this->contactModel->createMessageAndEmail($_POST["name"], $_POST["subject"], $_POST["message"], $_POST["email"], array_key_exists("checkbox", $_POST));
                $data["created"] = true;
            } else {
                $data["error"] = true;
            }
        }

        $this->view('contact/index', $data);
    }
}
