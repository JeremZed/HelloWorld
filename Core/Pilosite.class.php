<?php 
namespace Core;

use Core\Couleur;

abstract class Pilosite
{
	protected $libelle;
	protected $couleur;
	protected $src;
	
	public function getLibelle()
	{
		return $this->libelle;
	}
	
	public function getSrc()
	{
		return $this->src;
	}
	
	public function getCouleur()
	{
		return $this->couleur;
	}
	
	public function setLibelle($libelle)
	{
		$this->libelle = $libelle;
	}
	
	public function setSrc($src)
	{
		$this->src = $src;
	}
	
	public function setCouleur(Couleur $couleur)
	{
		$this->couleur = $couleur;
	}
}
