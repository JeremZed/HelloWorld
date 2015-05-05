<?php

namespace Engine;

use Engine\Dispatcher;

class Application
{
    public function __construct()
    {
        
    }
    
    /**
     * @desc    Point d'entré de l'application
     */
    public function run()
    {
        $Dispatcher = new Dispatcher();
        $Dispatcher->execute();
    }
    
    /**
     * @desc    Permet de retourner le visuel de la page demandée
     */ 
    public function render()
    {
        return '';
    }
}
