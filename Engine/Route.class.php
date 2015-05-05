<?php

namespace Engine;

class Route
{
    protected $controller;
    protected $action;
    protected $module;

    protected $instance_controller;
    
    protected $routes;
    protected $route;
    
    public function __construct($route)
    {
        $this->routes = $this->loadConfig('Config/routes.ini');
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
            throw new \ErrorException('Le fichier de configuration de route <b>' . $filename . '</b> n\'existe pas.');
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
        if((isset($this->routes[$this->route])))
        {  
            $this->hydrate($this->routes[$this->route]);
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
     * @desc    Permet de retourner le module associé à la route
     * @return  string
     */
    public function getModule()
    {
        return $this->module;
    }
    
    /**
     * @desc    permet de retourner l'instance du controller de la route
     */
    public function getInstanceController()
    {
        return $this->instance_controller;
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
            throw new \ErrorException('La configuration de la route <b>'.$this->route.'</b> ne possède pas de controller.');
        }
        
        if(!file_exists('Application/'.$data['module'].'/Controller/'.$data['controller'].'Controller.class.php'))
        {
            throw new \ErrorException('Le controller <b>'.$data['controller'].'</b> n\'existe pas dans le module <i>'.$data['module'].'</i>.');
        }
        
        return true;
    }
    
    /**
     * @desc    Permet de savoir si la configuration de la route et le controller possède l'action demandé
     *          Puis affecte l'instance du controller
     * @param array $data
     * @throws ErrorException
     * @return boolean
     */
    public function existAction(array $data)
    {
        if(!isset($data['action']))
        {
            throw new \ErrorException('La configuration de la route <b>'.$this->route.'</b> ne possède pas d\'action.');
        }
        
        if(file_exists('Application/'.$data['module'].'/Controller/'.$data['controller'].'Controller.class.php'))
        {
            require_once 'Application/'.$data['module'].'/Controller/'.$data['controller'].'Controller.class.php';
            
            $class = $data['controller'].'Controller';
            $instance = new $class();
            
            if(!method_exists($instance, $data['action'].'Action'))
            {
                throw new \ErrorException('L\'action <b>' . $data['action'] . '</b> n\'existe pas pour le controller <i>'.$data['controller'].'</i>');
            }
            
            $this->instance_controller = $instance;
        }
    
        return true;
    }
    
    /**
     * @desc    Permet de savoir si la configuration de la route possède un module
     * @param array $data
     * @throws ErrorException
     * @return boolean
     */
    public function existModule(array $data)
    {
        if(!isset($data['module']))
        {
            throw new \ErrorException('La configuration de la route <b>'.$this->route.'</b> ne possède pas de module.');
        }
        
        if(!file_exists('Application/'.$data['module']))
        {
            throw new \ErrorException('Le module <b>'.$data['module'].'</b> n\'existe pas.');
        }
    
        return true;
    }
    
    /**
     * @desc    permet d'hydrater les attributs de la classe (controller, action, module)
     * @param array $data
     */
    public function hydrate(array $data)
    {
        if($this->existModule($data))
        {
            $this->module = $data['module'];
        }
        
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
