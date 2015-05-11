<?php 

use Engine\View;
use Engine\MyDebug;
use Core\Personnage\Player;

class PersonnageController
{	
	public function createAction($params)
	{
		$data = $params->get('data');		
		parse_str($data, $output);
		
		$player = new Player();
		$player->setNom($output['name']);
		
	}
}