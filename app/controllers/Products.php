<?php

class Products extends BaseController
{
    public function index()
    {
        $data = ["page" => "Product"];

        $this->view('product/index', $data);
    }
}