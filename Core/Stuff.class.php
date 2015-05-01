<?php 

namespace Core;

use Core\Collection;

class Stuff
{
	protected $equipements;
	
	
	public function getEquipements()
	{
		return $this->equipements;
	}
	
	public function setLibelle(Collection $equipement)
	{
		$this->equipements = $equipement;
	}
}