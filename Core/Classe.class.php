<?php 
namespace Core;

use Core\Collection\CollectionSkill;

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
		$this->skills()->init($skills);
	}
	
	public function setDescription($description)
	{
		$this->description = $description;
	}
	
	public function addSkill(Skill $skill)
	{
		$this->skills->push($skill)
	}
}
