<?php 

use Core\Sexe\Masculin;
use Core\Sexe\Feminin;
use Core\Peau\Noire;

function my_autoload($class)
{
	$path = str_replace('_', '/', $class);
	$path = $path.'.class.php';

	if(file_exists($path)){	require_once $path; }
}

spl_autoload_register('my_autoload');

$homme = new Masculin();
$femme = new Feminin();

$peauNoire = new Noire();