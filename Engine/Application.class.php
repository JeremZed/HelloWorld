<?php

namespace Engine;

use Engine\Dispatcher;
use Engine\Fusion;

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
    
    public function generateCSS($generate=false)
    {
        if($generate)
        {
            $Fusion = Fusion::run();
        }
    }
}
