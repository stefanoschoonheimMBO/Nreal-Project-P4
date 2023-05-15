<?php

class Api extends BaseController
{
    private ContentModel $ContentModel;
    public function __construct()
    {
        $this->ContentModel = $this->model('ContentModel');
    }
    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $requestBody = file_get_contents('php://input');
            $data = json_decode($requestBody);
            if (
                property_exists($data, "data") &&
                property_exists($data, "url")
            ) {
                $this->ContentModel->createContent($data->url, $data->data);
                echo "Done";
            }
        } else {
            $data = [];

            http_response_code(404);

            $this->view('error/404', $data);
            return;
        }
    }
    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $requestBody = file_get_contents('php://input');
            $data = json_decode($requestBody);
            if (
                property_exists($data, "data") &&
                property_exists($data, "url")
            ) {
                $this->ContentModel->updateContent($data->url, $data->data);
                echo "Done";
            }
        } else {
            $data = [];

            http_response_code(404);

            $this->view('error/404', $data);
            return;
        }
    }
}
