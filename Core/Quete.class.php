<?php 
namespace Core;

use Core\Collection;
use Core\Item;

abstract class Quete
{
	protected $nom;
	protected $description;
	protected $recompenseXp;
	protected $recompensePo;
	protected $butin;
	protected $niveau;
	protected $dependance;
	protected $realiser;
	
	public function getNom()
	{
		return $this->nom;
	}
	
	public function getDescription()
	{
		return $this->description;
	}
	
	public function getRecompenseXp()
	{
		return $this->recompenseXp;
	}
	
	public function getRecompensePo()
	{
		return $this->recompensePo;
	}
	
	public function getButin()
	{
		return $this->butin;
	}
	
	public function getNiveau()
	{
		return $this->niveau;
	}
	
	public function getDependance()
	{
		return $this->dependance;
	}
	
	public function getRealiser()
	{
		return $this->realiser;
	}
	
	public function setNom($nom)
	{
		$this->nom = $nom;
	}
	
	public function setDescription($description)
	{
		$this->description = $description;
	}
	
	public function setRecompenseXp($recompense)
	{
		$this->recompenseXp = $recompense;
	}
	
	public function setRecompensePo($recompense)
	{
		$this->recompensePo = $recompense;
	}
	
	public function setButin(Collection $items)
	{
		$this->butin = $items;
	}
	
	public function addButin(Item $item)
	{
		$this->butin->add($item);
	}
	
	public function setNiveau($niveau)
	{
		$this->niveau = $niveau;
	}
	
	public function setDependance($dependance)
	{
		$this->dependance = $dependance;
	}
	
	public function setRealiser($realiser)
	{
		$this->realiser = $realiser;
	}
}
