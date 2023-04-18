<?php

class Content extends BaseController
{
    private $ContentModel;
    public function __construct()
    {
        $this->ContentModel = $this->model('ContentModel');
    } 
    
    public function index($url = null)
    {
        $result = $this->ContentModel->getContentBasedOnUrl($url);
        if(!$result) 
        {
            //temperory double code (ErrorController.php)
            $data = [];

            http_response_code(404);
    
            $this->view('error/404', $data);
            return;
        }
        $data = ["page" => "Content",
                "title" => $url . " Page",
                "contentText" => $result->pageText];
        
        $this->view('content/index', $data);
    }
}