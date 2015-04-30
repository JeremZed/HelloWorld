<?php 
namespace Core;

abstract class Classe
{
	protected $libelle;
	protected $description;
	protected $skills;
	
	public function getLibelle()
	{
		return $this->libelle;
	}
	
	public function getDescription()
	{
		return $this->description;
	}
	public function getSkills()
	{
		return $this->skills;
	}
	
	public function setLibelle($libelle)
	{
		$this->libelle = $libelle;
	}
	
	public function setSkills(CollectionSkill $skills)
	{
		$this->skills = $skills;
	}
	
	public function setDescription($description)
	{
		$this->description = $description;
	}
}
