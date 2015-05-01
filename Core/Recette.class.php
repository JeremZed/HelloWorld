<?php 

namespace Core;

use Core\Metier;
use Core\Collection;

abstract class Recette
{
	protected $libelle;
	protected $description;
	protected $metier;
	protected $niveau;
	protected $items;
	
	public function getLibelle()
	{
		return $this->libelle;
	}
	
	public function getDescription()
	{
		return $this->description;
	}
	
	public function getMetier()
	{
		return $this->metier;
	}
	
	public function getNiveau()
	{
		return $this->niveau;
	}
	
	public function getItems()
	{
		return $this->items;
	}
	
	public function setLibelle($libelle)
	{
		$this->libelle = $libelle;
	}
	
	public function setDescription($description)
	{
		$this->description = $description;
	}
	
	public function setMetier(Metier $metier)
	{
		$this->metier = $metier;
	}
	
	public function setNiveau($niveau)
	{
		$this->niveau = $niveau;
	}
	
	public function setItems(Collection $items)
	{
		$this->items = $items;
	}
}