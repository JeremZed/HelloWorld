<?php 
namespace Core;

abstract class Corpulence
{
	protected $libelle;
	protected $src;
	
	public function getLibelle()
	{
		return $this->libelle;
	}
	
	public function getSrc()
	{
		return $this->src;
	}
	
	public function setLibelle($libelle)
	{
		$this->libelle = $libelle;
	}
	
	public function setSrc($src)
	{
		$this->src = $src;
	}
}
