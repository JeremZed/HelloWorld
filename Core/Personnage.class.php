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
    
    public function getBanque()
    {
        return $this->banque;
    }
    
    public function getMetier()
    {
        return $this->metier;
    }
    
    public function getRecette()
    {
        return $this->recette;
    }
    
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    
    public function setDroitier($droitier)
    {
        $this->droitier = $droitier;
    }
    
    public function setGaucher($gaucher)
    {
        $this->gaucher = $gaucher;
    }
    
    public function setExperience($exp)
    {
        $this->experience = $exp;
    }
    
    public function setSexe(Sexe $sexe)
    {
        $this->sexe = $sexe;
    }
    
    public function setApparence(Apparence $apparence)
    {
        $this->apparence = $apparence;
    }
    
    public function setRace(Race $race)
    {
        $this->race = $race;
    }
    
    public function setClasse(Classe $classe)
    {
        $this->classe = $classe;
    }
    
    public function setEquipement(Stuff $stuff)
    {
        $this->equipement = $stuff;
    }
    
    public function setCaracteristique(Caracteristiques $carac)
    {
        $this->caracteristique = $carac;
    }
    
    public function setInventaire(Stockage $inventaire)
    {
        $this->inventaire = $inventaire;
    }
    
    public function setBanque(Stockage $banque)
    {
        $this->banque = $banque;
    }
    
    public function setMetier(Professions $professions)
    {
        $this->metier = $professions;
    }
    
    public function setRecette(Recettes $recettes)
    {
        $this->recette = $recettes;
    }

}
