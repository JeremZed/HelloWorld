<?php

namespace Engine;

class Route
{
    protected $controller;
    protected $action;        
    protected $routes;
    protected $route;
    
    public function __construct($route)
    {
        $this->routes = $this->loadConfig('routes.ini');
        $this->route = $route;
    }
    
    /**
     * @desc    Permet de retourner les routes configurées
     * @param   string $filename
     * @throws  ErrorException
     * @return  multitype:
     */
    public function loadConfig($filename)
    {
        if(file_exists($filename))
        {
            return parse_ini_file($filename, true);
        }
        else
        {
            throw new ErrorException('Le fichier de configuration de route <b>' . $filename . '</b> n\'existe pas.');
        }
    }
    
    /**
     * @desc    Permet de savoir si la route demandée existe et hydrate avec les infos de la route
     * @param   array $routes
     * @param   string $flag
     * @return  boolean
     */
    public function exist()
    {          
        $data = $this->routes[$this->route];  
        if((isset($data)))
        {  
            $this->hydrate($data);
            return true;
        }
        
        return false;
    }
    
    /**
     * @desc    Permet de retourner le controller associé à la route
     * @return  string
     */
    public function getController()
    {
        return $this->controller;
    }
    
    /**
     * @desc    Permet de retourner l'action associé à la route
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }
    
    /**
     * @desc    Permet de savoir si la configuration de la route possède un controller
     * @param array $data
     * @throws ErrorException
     * @return boolean
     */
    public function existController(array $data)
    {
        if(!isset($data['controller']))
        {
            throw new ErrorException('La configuration de la route <b>'.$this->route.'</b> ne possède pas de controller.');
        }
        
        return true;
    }
    
    /**
     * @desc    Permet de savoir si la configuration de la route possède une action
     * @param array $data
     * @throws ErrorException
     * @return boolean
     */
    public function existAction(array $data)
    {
        if(!isset($data['action']))
        {
            throw new ErrorException('La configuration de la route <b>'.$this->route.'</b> ne possède pas d\'action.');
        }
    
        return true;
    }
    
    /**
     * @desc    permet d'hydrater les attributs de la classe
     * @param array $data
     */
    public function hydrate(array $data)
    {
        if($this->existController($data))
        {
            $this->controller = $data['controller'];
        }
        
        if($this->existAction($data))
        {
            $this->action = $data['action'];
        }
    }
}
