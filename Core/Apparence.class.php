<?php

namespace Core;

abstract class Apparence
{
	protected $taille;
	protected $poids;
	protected $peau;
	protected $cheveux;
	protected $pilosite;
	protected $corpulence;
	
	public function getTaille()
	{
		return $this->taille;
	}
	
	public function getPoids()
	{
		return $this->poids;
	}
	
	public function getPeau()
	{
	  return $this->peau;
	}
	
	public function getCheveux()
	{
	  return $this->cheveux;
	}
	
	public function getPilosite()
	{
	  return $this->pilosite;
	}
	
	public function getCorpulence()
	{
	  return $this->corpulence;
	}
	
	public function setTaille($taille)
	{
		$this->taille = $taille;
	}
	
	public function setPoids($poids)
	{
		$this->poids = $poids;
	}
}
