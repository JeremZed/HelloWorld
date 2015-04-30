<?php 
namespace Core;

abstract class Skill
{
	protected $libelle;
	protected $description;
	protected $type;
	protected $value;
	protected $caracteristique;
	
	public function getLibelle()
	{
		return $this->libelle;
	}
	
	public function setLibelle($libelle)
	{
		$this->libelle = $libelle;
	}
	
}
