<?php 

namespace Core;

abstract class Caracteristique
{
	protected $libelle;
	protected $value;
	
	public function getLibelle()
	{
		return $this->libelle;
	}
	
	public function getValue()
	{
		return $this->value;
	}
	
	public function setLibelle($libelle)
	{
		$this->libelle = $libelle;
	}
	
	public function setValue($value)
	{
		$this->value = $value;		
	}
	
	public function downgrade($value)
	{
		$this->value -= $value;
	}
	
	public function upgrade($value)
	{
		$this->value += $value;
	}
}