<?php 

namespace Core;

use Core\Collection;
use Core\Recette;

class Recettes
{
	protected $recettes;
	
	
	public function getRecettes()
	{
		return $this->recettes;
	}
	
	public function setRecettes(Collection $recettes)
	{
		$this->recettes = $recettes;
	}
	
	public function addRecette(Recette $recette)
	{
		$this->recettes->add($recette);	
	}
	
	public function removeRecette($key)
	{
		$this->recettes->remove($key);
	}
	
	public function getRecette($key)
	{
		return $this->recettes->get($key);
	}
}