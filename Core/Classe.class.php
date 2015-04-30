<?php 
namespace Core;

abstract class Classe
{
	protected $libelle;
	protected $description;
	
	public function getLibelle()
	{
		return $this->libelle;
	}
	
	public function getDescription()
	{
		return $this->description;
	}
	
	public function setLibelle($libelle)
	{
		$this->libelle = $libelle;
	}
	
	public function setDescription($description)
	{
		$this->description = $description;
	}
}
