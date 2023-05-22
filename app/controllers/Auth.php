<?php

class Auth extends BaseController
{
    private UserModel $userModel;
    public function __construct()
    {
        $this->userModel = $this->model("UserModel");
    }
    public function login()
    {
        $success = null;
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $success = $this->login_form_action();
            if ($success) {
                header('Location: ' . URLROOT . "/content/list");
                die();
            }
        }
        $data = ["success" => $success];

        $this->view('auth/login', $data);
    }
    private function login_form_action()
    {
        if (array_key_exists("email", $_POST) && array_key_exists("password", $_POST)) {
            $email = $_POST["email"];
            $passwd = $_POST["password"];
            $user = $this->userModel->getUserBasedOnPasswordAndEmail($email, $passwd);
            if ($user) {
                setcookie('user', json_encode([
                    "id" => $user->id,
                    'email' => $user->email,
                ]), time() + 3600 * 24 * 30, "/");
                return true;
            } else {
                return false;
            }
        }
    }
}
