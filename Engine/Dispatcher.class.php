<?php

namespace Engine;

class Dispatcher
{
    protected $uri;
    
    public function __construct()
    {
        $this->uri = $_SERVER['REQUEST_URI'];
    }
}
