<?php

namespace Core\Personnage;

use Core\Personnage;

class Player extends Personnage
{
	public function __construct()
	{
		$this->setNom('Player.');
	}
}
