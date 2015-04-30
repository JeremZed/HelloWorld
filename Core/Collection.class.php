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
     * @param   $key clé de l'occurence du tableau
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
    
    /**
     * @desc    Ajoute un element au tableau
     * @param   mixed $value
     * @return  Retourne TRUE
     */
    public function add($value)
    {
        $this->array[] = $value;
        return true;
    }
    
    /**
     * @desc    Affecte une valeur sur une occurence précise du tableau
     * @param   mixed $key      clé du tableau
     * @param   mixed $value    valeur à insérer
     * @return  retourne TRUE
     */
    public function set($key, $value)
    {
        $this->array[$key] = $value;
        return true;
    }
    
    /**
     * @desc    Permet de vider totalement le tableau
     * @return  Retourne TRUE
     */
    public function clear()
    {
        $this->array = array();
        return true;
    }
    
    /**
     * @desc    Permet de supprimer une occurence précise du tableau
     * @param   mixed $key
     * @return  True si la suppression est ok sinon False
     */
    public function remove($key)
    {
        if(isset($this->array[$key]))
        {
            unset($this->array[$key]);
            return true;
        }
        else 
        {
            return false;
        }
    }
    
    /**
     * @desc    Permet de savoir si le tableau est vide
     * @return  boolean Si le tableau est vide on renvoi TRUE sinon False
     */
    public function isEmpty()
    {
        return ! $this->array;
    }
    
    /**
     * @desc    Permet de compter le nombre total d'occurence dans le tableau
     * @return  number
     */
    public function count()
    {
        return count($this->array);
    }
    
    /**
     * @desc    Permet de savoir si la valeur saisie est présente dans le tableau, test sur la valeur et le type.
     * @param   mixed $value
     * @return  boolean
     */
    public function valueExist($value)
    {
        return in_array($value, $this->array, true);
    }
    
    /**
     * @desc    Permet de savoir si la clé saisie existe dans le tableau
     * @param   mixed $key
     * @return  boolean
     */
    public function keyExist($key)
    {
        return array_key_exists($key, $this->array) || isset($this->array[$key]);
    }
    
    /**
     * @desc    Permet de retourner toutes les clés du tableau
     * @return  array
     */
    public function getKeys()
    {
        return array_keys($this->array);
    }
    
    /**
     * @desc    Permet de retourner toutes les valeurs du tableau
     * @return  array
     */
    public function getValues()
    {
        return array_values($this->array);
    }
    
    /**
     * @desc    Permet de mettre le pointeur interne du tableau sur le premier element et de le retourner
     * @return  mixed
     */
    public function first()
    {
        return reset($this->array);
    }
    
    /**
     * @desc    Permet de mettre le pointeur interne du tableau sur le dernier element et de le retourner
     * @return  mixed
     */
    public function last()
    {
        return end($this->array);
    }
    
    /**
     * @desc    Permet de mettre le pointeur interne du tableau sur l'element en cours et de le retourner
     * @return  mixed
     */
    public function current()
    {
        return current($this->array);
    }
    
    /**
     * @desc    Permet d'avancer le pointeur interne du tableau d'une occurence et de la retourner
     * @return  mixed
     */
    public function next()
    {
        return next($this->array);
    }
    
    /**
     * @desc    Permet de trier le tableau par ordre croissant
     * @return  boolean
     */
    public function sort($flag=null)
    {
        return sort($this->array, $flag);
    }
}
