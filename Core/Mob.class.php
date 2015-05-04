<?php

namespace Core;

use Core\Collection;
use Core\Item;
use Core\Skill;
use Core\Stuff;
use Core\Caracteristiques;

abstract class Mob
{
    protected $nom;
    protected $description;
    protected $niveau;
    protected $caracteristiques;
    protected $equipement;
    protected $butin;
    protected $competences;
    
    public function getNom()
    {
        return $this->nom;
    }
    
    public function getDescription()
    {
        return $this->description;
    }
    
    public function getNiveau()
    {
        return $this->niveau;
    }
    
    public function getCaracteristiques()
    {
        return $this->caracteristiques;
    }
    
    public function getStuff()
    {
        return $this->equipement;
    }
    
    public function getButin()
    {
        return $this->butin;
    }
    
    public function getCompetences()
    {
        return $this->competences;
    }
    
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;
    }
    
    public function setStuff(Stuff $stuff)
    {
        $this->equipement = $stuff;
    }
    
    public function setCaracteristiques(Caracteristiques $carac)
    {
        $this->caracteristiques = $carac;
    }
    
    public function setButin(Collection $items)
    {
        $this->butin = $items;
    }
    
    public function addButin(Item $item)
    {
        $this->butin->add($item);
    }
    
    public function setCompetences(Collection $competences)
    {
        $this->competences = $competences;    
    }
    
    public function addComptence(Skill $skill)
    {
        $this->competences->add($skill);
    }
}
