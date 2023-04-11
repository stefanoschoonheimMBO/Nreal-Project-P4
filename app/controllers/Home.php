<?php

class Home extends BaseController
{
    public function index($id = NULL, $name = NULL)
    {
        $data = ["page" => "Home"];

        $this->view('home/index', $data);
    }
}