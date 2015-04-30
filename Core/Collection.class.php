<?php

namespace Core;

class Collection
{
    protected $array;
    
    public function __construct(array $tab = array())
    {
        $this->array = $tab;
    }
    
    /**
     * @desc    Retourne la collection
     * @return  Array
     */
    public function getArray()
    {
        return $this->array;
    }
    
    /**
     * @desc    Retourne une occurence du tableau en fonction de sa clé
     * @return  Si existe alors le contenu Sinon null
     */
    public function get($key)
    {
        if(isset($this->array[$key]))
        {
            return $this->array[$key];
        }
        else
        {
            return null;
        }
    }
}
