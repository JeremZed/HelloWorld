<?php

namespace Engine;

use Engine\Route;

class Dispatcher
{
    protected $route;
    protected $_get;
    protected $_post;        
            
    public function __construct($route=null)
    {
        $this->_get = $_GET;
        $this->setRoute($route);
    }
    
    /**
     * @desc    Permet d'affecter la valeur de la route en fonction du $_GET ou via le constructeur
     * @param unknown $route
     */
    public function setRoute($route)
    {            
        if(isset($route))
        {
            $this->route = $route;               
        }
        elseif($this->getExist('route')) 
        {
            $this->route = $this->get('route');                
        }
        else
        {
            throw new ErrorException('Aucune route à charger.');
        }            
    }
    
    /**
     * @desc    Permet de retourner la route encours
     * @return Ambigous <unknown, NULL>
     */
    public function getRoute()
    {
        return $this->route;
    }
    
    /**
     * @desc    Permet de retourner la valeur du $_GET en fonction de sa clé, sinon null
     * @param mixed $key
     * @return NULL
     */
    public function get($key)
    {
        if(isset($this->_get[$key]))
        {
            return $this->_get[$key];
        }
        else 
        {
            return null;
        }
    }
    
    /**
     * @desc    Permet de savoir si une variable $_GET existe en indiquant son nom
     * @param mixed $key
     */
    public function getExist($key)
    {
        return (isset($this->_get[$key]));
    }
    
    /**
     * @desc    Permet de lancer le traitement correspondant à la route demandée
     */
    public function execute()
    {
        $Route = new Route($this->route);            
                   
        if($Route->exist())
        {
            $controller = $Route->getController();
            $action = $Route->getAction().'Action';
            $module = $Route->getModule();
            
            $instanceController = $Route->getInstanceController();
            $instanceController->$action();
            
        }
        else
        {
            throw new ErrorException('Cette route ' . $this->route . ' n\'existe pas.');
        }
    }
}
