<?php

namespace Core;

class Collection
{
    protected $array;
    
    public function __construct(array $tab = array())
    {
        $this->array = $tab;
    }
}
