<?php

class Contact extends BaseController
{
    public function index()
    {
        $data = ["page" => "contact"];

        $this->view('contact/index', $data);
    }
}