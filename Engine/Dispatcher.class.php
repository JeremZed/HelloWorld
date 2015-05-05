<?php

namespace Engine;

class Dispatcher
{
    protected $route;
    
    public function __construct($route=null)
    {
        $this->route = $this->setRoute($route);
    }
    
    public function setRoute($route)
    {
        $this->route = $route;
    }
    
    public function execute()
    {
        
    }
}
