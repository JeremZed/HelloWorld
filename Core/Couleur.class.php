<?php

namespace Core;

abstract class Couleur
{
	protected $libelle;
	
	public function getLibelle()
	{
		return $this->libelle;
	}
	
	public function setLibelle($libelle)
	{
		$this->libelle = $libelle;
	}
}
