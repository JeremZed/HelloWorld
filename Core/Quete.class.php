<?php 
namespace Core;

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
	
	public function setLibelle($libelle)
	{
		$this->libelle = $libelle;
	}
}
