<?php

namespace Engine;

use Engine\Dispatcher;

class Application
{
    public function __construct()
    {}
    
    public function run()
    {
        $Dispatcher = new Dispatcher();
        $Dispatcher->execute();
    }
    
    public function render()
    {
        return 'good';
    }
}
