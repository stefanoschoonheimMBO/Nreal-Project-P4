<?php

class Core
{
    private $currentController = 'ErrorController';
    private $currentMethod = 'error_404';
    private $params = [];

    public function __construct()
    {
        if (array_key_exists("user", $_COOKIE)) {
            define("authenticated", true);
        } else {
            define("authenticated", false);
        }
        $url = $this->getURL();

        if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
            $this->currentController = ucwords($url[0]);

            $this->currentMethod = "index";

            // Haal de controllername uit het $url array
            unset($url[0]);
        }

        // Laad het bestand waar de controller in zit voor het maken van een object van die klasse
        require_once '../app/controllers/' . $this->currentController . '.php';

        $this->currentController = new $this->currentController();
        if (isset($url[1])) {
            if (method_exists($this->currentController, $url[1])) {
                $this->currentMethod = $url[1];
            }
            unset($url[1]);
        }

        $this->params = $url ? array_values($url) : [];
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    public function getURL()
    {
        if (isset($_GET['url'])) {
            // Haal de laatste forwardslash weg van de string achter de virtualhostnaam
            $url = rtrim($_GET['url'], '/');

            $url = filter_var($url, FILTER_SANITIZE_URL);

            $url = explode('/', $url);

            return $url;
        } else {
            return array('home', 'index');
        }
    }
}
