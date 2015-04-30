<?php 

namespace Core;

use Core\Rarete;
use Core\TypeItem;

abstract class Item
{
	protected $libelle;
	protected $description;
	protected $type;
	protected $rarete;
	protected $tauxLoot;
	
	public function getLibelle()
	{
		return $this->libelle;
	}
	
	public function getDescription()
	{
		return $this->description;
	}
	
	public function getType()
	{
		return $this->type;
	}
	
	public function getRarete()
	{
		return $this->rarete;
	}
	
	public function getTauxLoot()
	{
		return $this->tauxLoot;
	}
	
	public function setLibelle($libelle)
	{
		$this->libelle = $libelle;
	}
	
	public function setDescription($description)
	{
		$this->description = $description;
	}
	
	public function setType(TypeItem $type)
	{
		$this->type = $type;
	}
	
	public function setRarete(Rarete $rarete)
	{
		$this->rarete = $rarete;
	}
	
	public function setTauxLoot($tauxLoot)
	{
		$this->tauxLoot = $tauxLoot;
	}
}