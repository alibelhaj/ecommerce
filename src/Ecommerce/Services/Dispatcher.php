<?php
namespace Ecommerce\Services;

class Dispatcher
{
    private $parameters;

    public function __construct()
    {
        $this->parameters = $_GET;
    }

    public function dispatcher()
    {
        $controller = $this->parameters['controller'];
        $action = $this->parameters['action'];
        $viewPath = sprintf('../Views/%s/%s.html.twig', ucfirst($controller), $action);
        $template = sprintf('%s/%s.html.twig', ucfirst($controller), $action);
        if (!file_exists(__DIR__ . "/" . $viewPath))
            throw new \Exception("File $viewPath not found");

        $loader = new \Twig_Loader_Filesystem(__DIR__ . '/../Views');
        $twig = new \Twig_Environment($loader);
        echo $twig->render($template);
    }
}