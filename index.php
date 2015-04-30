<?php 

use Core\Sexe\Masculin;
use Core\Sexe\Feminin;
use Core\Peau\Noire as PeauNoire;
use Core\Peau\Blanche as PeauBlanche;
use Core\Peau\Bleue as PeauBleue;
use Core\Cheveux\Court as CheveuxCourt;
use Core\Cheveux\Long as CheveuxLong;
use Core\Cheveux\Rase as CheveuxRase;
use Core\Pilosite\Barbe as PilositeBarbe;
use Core\Pilosite\Aucune as PilositeAucune;
use Core\Corpulence\Gros as Gros;
use Core\Corpulence\Mince as Mince;
use Core\Corpulence\Muscle as Muscle;
use Core\Race\Humain;
use Core\Race\Grems;
use Core\Race\Touchar;
use Core\Race\Holik;


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

$cheveuxCourt = new CheveuxCourt();
$cheveuxLong = new CheveuxLong();
$cheveuxRase = new CheveuxRase();

$barbe = new PilositeBarbe();
$barbeNone = new PilositeAucune();

$corpsGros = new Gros();
$corpsMince = new Mince();
$corpsMuscle = new Muscle();

$humain = new Humain();
$grems = new Grems();
$touchar = new Touchar();
$holik = new Holik();
