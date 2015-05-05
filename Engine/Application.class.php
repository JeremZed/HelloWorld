<?php

namespace Engine;

use Engine\Dispatcher;

class Application
{
	protected $template;	
	
    public function __construct()
    {}
    
    public function run()
    {
        $Dispatcher = new Dispatcher();
        $Dispatcher->execute();
        
        $Template = new Template();
        $Template->setView( $Dispatcher->getView());
        $Template->setPathView($Dispatcher->getPathView());
        
        $this->template = $Template;        
    }
    
    public function render()
    {     
    	return $this->template->render();
    }
}
