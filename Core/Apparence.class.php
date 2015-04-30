<?php

namespace Core;

use Core\Peau;
use Core\Cheveux;
use Core\Pilosite;
use Core\Corpulence;

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
	
	public function calculPoids()
	{
		// Calcul du poids en fonction de la taille et de la corpulence
	}
	
	public function setPeau(Peau $peau)
	{
		$this->peau = $peau;
	}
	
	public function setCheveux(Cheveux $cheveux)
	{
		$this->cheveux = $cheveux;
	}
	
	public function setPilosite(Pilosite $pilosite)
	{
		$this->pilosite = $pilosite;
	}
	
	public function setCorpulence(Corpulence $corpulence)
	{
		$this->corpulence = $corpulence;
	}
}
