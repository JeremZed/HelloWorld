<?php 

namespace Core;

abstract class Metier
{
	protected $libelle;
	protected $description;
	protected $experience;
	
	public function getLibelle()
	{
		return $this->libelle;
	}
	
	public function getDescription()
	{
		return $this->description;
	}
	
	public function getExperience()
	{
		return $this->experience;
	}
	
	public function setLibelle($libelle)
	{
		$this->libelle = $libelle;
	}
	
	public function setDescription($description)
	{
		$this->description = $description;
	}
	
	public function setExperience($experience)
	{
		$this->experience = $experience;
	}
}