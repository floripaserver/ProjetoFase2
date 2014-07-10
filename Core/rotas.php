<?php

/**
 * Created by PhpStorm.
 * User: paulo
 * Date: 10/07/14
 * Time: 15:22
 */
class rotas
{

    private $controller;

    public function __construct()
    {

        $this->split_uri();

    }

    private function split_uri()
    {

        $url_splitted = preg_split("[\\/]", $_SERVER["REQUEST_URI"], -1, PREG_SPLIT_NO_EMPTY);

        if ($url_splitted) {
            $this->controller = $url_splitted[0];
        }

    }

    public function getController()
    {

        if ($this->controller) {

            if (file_exists($this->controller . ".php")) {

                $result = $this->controller.".php";
            } else {
                echo header('HTTP/1.0 404');

                $result = 'erro404.php';
            }
        } else {

            $result = "home.php";
        }

        return $result;

    }

    public function checkPage(){
        $page = preg_split("[\\.]", $this->controller, -1, PREG_SPLIT_NO_EMPTY);

        if ($page[1] == 'php'){

            if (strstr($_SERVER['REQUEST_URI'],$this->controller)){

                if($this->controller == 'index.php'){
                    $this->controller = 'home';
                } else {
                    echo header('HTTP/1.0 404 Not Found');
                    echo "<h1>Erro 404 n&atilde;o encontrado</h1>";
                    echo "A p&aacute;gina que voc&ecirc; requisitou n&atilde;o pode ser encontrado.";
                    exit();
                }
            }
        }

    }

}