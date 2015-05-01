<?php

namespace Core\Stockage;

use Core\Stockage;

class Banque extends Stockage
{
	public function __construct()
	{
		$this->setLibelle('Banque.');
	}
}
