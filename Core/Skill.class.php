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
	
	public function getDescription()
	{
		return $this->description;
	}
	
	public function getType()
	{
		return $this->type;
	}
	
	public function setLibelle($libelle)
	{
		$this->libelle = $libelle;
	}
	
	public function setDescription($str)
	{
		$this->description = $str;
	}
	
	public function setType($type)
	{
		$this->type = $type;
	}
	
	public function setValue($value)
	{
		$this->value = $value;
	}
}
