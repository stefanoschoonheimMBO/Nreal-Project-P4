<?php

class ErrorController extends BaseController
{
    public function error_404()
    {
        $data = [];

        http_response_code(404);

        $this->view('error/404', $data);
    }
}