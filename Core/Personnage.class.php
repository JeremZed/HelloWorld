<?php

namespace Core;

abstract class Personnage
{
    protected $nom;
    protected $droitier;
    protected $gaucher;
    protected $experience;
    protected $sexe;
    protected $apparence;
    protected $race;
    protected $classe;
    protected $equipement;
    protected $caracteristique;
    protected $inventaire;
    protected $banque;
    protected $metier;
    protected $recette;
    
    public function getNom()
    {
        return $this->nom;
    }
    
    public function getDroitier()
    {
        return $this->droitier;
    }
    
    public function getGaucher()
    {
        return $this->gaucher;
    }
    
    public function getExperience()
    {
        return $this->experience;
    }
    
    public function getSexe()
    {
        return $this->sexe;
    }
    
    public function getApparence()
    {
        return $this->apparence;
    }
    
    public function getRace()
    {
        return $this->race;
    }
    
    public function getClasse()
    {
        return $this->classe;
    }
    
    public function getEquipement()
    {
        return $this->equipement;
    }
    
    public function getCaracteristique()
    {
        return $this->caracteristique;
    }
    
    public function getInventaire()
    {
        return $this->inventaire;
    }

}
