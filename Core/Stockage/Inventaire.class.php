<?php

namespace Core\Stockage;

use Core\Stockage;

class Inventaire extends Stockage
{
	public function __construct()
	{
		$this->setLibelle('Inventaire.');
	}
}
