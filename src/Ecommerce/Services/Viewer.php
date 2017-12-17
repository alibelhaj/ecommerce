<?php
namespace Ecommerce\Services;

class Viewer
{
    private $parameters;
    private $viewPath;
    private $template;

    public function render()
    {
        $template = $this->createTemplate();

        $loader = new \Twig_Loader_Filesystem(__DIR__ . '/../Views');
        $twig = new \Twig_Environment($loader, ["cache" => false]);

        echo $twig->render($template);
    }

    public function setParameters($parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }

    public function createTemplate()
    {
        list($controller, $action) = $this->parameters;
        $viewPathString = sprintf('%s/%s.html.twig', ucfirst($controller), $action);
        if (!file_exists(__DIR__ . "/../Views/" . $viewPathString))
            throw new \Exception("File $viewPathString not found");
        return $this->viewPath = $viewPathString;
    }

}