<?php 

use Core\Sexe\Masculin;
use Core\Sexe\Feminin;
use Core\Peau\Noire as PeauNoire;
use Core\Peau\Blanche as PeauBlanche;
use Core\Peau\Bleue as PeauBleue;


function my_autoload($class)
{
	$path = str_replace('_', '/', $class);
	$path = $path.'.class.php';

	if(file_exists($path)){	require_once $path; }
}

spl_autoload_register('my_autoload');

$homme = new Masculin();
$femme = new Feminin();

$peauNoire = new PeauNoire();
$peauBlanche = new PeauBlanche();
$peauBleue = new PeauBleue();
