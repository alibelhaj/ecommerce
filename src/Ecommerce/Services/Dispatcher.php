<?php
namespace Ecommerce\Services;

class Dispatcher
{
    private $parameters;

    public function __construct()
    {
        $this->parameters = $_GET;
        $this->viewer = new Viewer();
    }

    public function dispatcher()
    {
        $paramaters = $this->extractParamControlleurAndAction();
        $this->viewer->setParameters($paramaters)->render();
    }

    public function extractParamControlleurAndAction()
    {

        $controller = array_key_exists('controller', $this->parameters) ? $this->parameters['controller'] : DEFAULT_CONTROLLER;
        $action = array_key_exists('action', $this->parameters) ? $this->parameters['action'] : DEFAULT_ACTION;
        return [$controller, $action];
    }
}