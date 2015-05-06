<?php

namespace Engine;

class Save
{
    protected $save;
    
    public function __construct()
    {
        if($this->exist())
        {
            $this->save = $this->load();
        }
    }
    
    public function exist()
    {
        
    }
    
    public function load()
    {
        
    }
}
