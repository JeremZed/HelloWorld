<?php 

namespace Core;

use Core\Item;

abstract class Equipement
{
	protected $libelle;
	protected $type;
	protected $item;
	
	public function getLibelle()
	{
		return $this->libelle;
	}
	
	public function getType()
	{
		return $this->type;
	}
	
	public function getItem()
	{
		return $this->item;
	}
	
	public function setLibelle($libelle)
	{
		$this->libelle = $libelle;
	}
	
	public function setType($type)
	{
		$this->type = $type;
	}
	
	public function setItem(Item $item)
	{
		$this->item = $item;
	}
}