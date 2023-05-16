<?php

class Auth extends BaseController
{
    public function login()
    {
        $data = ["page" => "Login"];

        $this->view('auth/login', $data);
    }
}