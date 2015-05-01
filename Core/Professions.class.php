<?php 

namespace Core;

use Core\Collection;
use Core\Metier;

class Professions
{
	protected $metiers;
	
	
	public function getMetiers()
	{
		return $this->metiers;
	}
	
	public function setMetier(Collection $metiers)
	{
		$this->metiers = $metiers;
	}
	
	public function addMetier(Metier $metier)
	{
		$this->metiers->add($metier);
	}
	
	public function getMetier($key)
	{
		return $this->metiers->get($key);
	}
	
	public function removeMetier($key)
	{
		$this->metiers->remove($key);
	}
}