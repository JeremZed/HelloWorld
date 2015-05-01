<?php 

namespace Core;

use Core\Collection;

class Caracteristiques
{
	protected $vieTotale;
	protected $vieEnCours;
	protected $caracteristiques;	
	
	public function getCaracteristiques()
	{
		return $this->caracteristiques;
	}
	
	public function setCaracteristique(Collection $caracteristiques)
	{
		$this->caracteristiques = $caracteristiques;
	}
	
	public function calculVieTotale()
	{
		// calcule de la vie totale en fonction des caractéristiques
	}
	
	public function getVieEnCours()
	{
		return $this->vieEnCours;
	}
	
	public function setVieEnCours($vie)
	{
		$this->vieEnCours = $vie;
	}
}