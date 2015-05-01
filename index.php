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
use Core\Classe\Guerrier;
use Core\Classe\Rodeur;
use Core\Classe\Moine;
use Core\Classe\Mage;
use Core\Skill\BouleDeFeu;
use Core\Skill\TirTendu;
use Core\Skill\FrappeFeroce;
use Core\Skill\EclatDeLumiere;
use Core\Rarete\Commun as RareteCommun;
use Core\Rarete\Vert as RareteVert;
use Core\Rarete\Gold as RareteGold;
use Core\Rarete\Legend as RareteLegend;
use Core\TypeItem\Arme as TypeArme;
use Core\TypeItem\Armure as TypeArmure;
use Core\TypeItem\Consommable as TypeConsommable;
use Core\TypeItem\Compos as TypeCompos;
use Core\Item\EpeeDeFeu;
use Core\TypeEquipement\Arme as EquipementArme;
use Core\TypeEquipement\Armure as EquipementArmure;
use Core\TypeEquipement\Bijou as EquipementBijou;
use Core\Equipement\Tete as ETete;
use Core\Equipement\Epaule as EEpaule;
use Core\Equipement\Gant as EGant;
use Core\Equipement\Torse as ETorse;
use Core\Equipement\Jambe as EJambe;
use Core\Equipement\Pied as EPied;
use Core\Equipement\MainDroite as EMainDroite;
use Core\Equipement\MainGauche as EMainGauche;
use Core\Equipement\OreilleGauche as EOreilleGauche;
use Core\Equipement\OreilleDroite as EOreilleDroite;
use Core\Equipement\Cou as ECou;
use Core\Equipement\Bague1 as EBague1;
use Core\Equipement\Bague2 as EBague2;
use Core\Stuff;
use Core\Caracteristique\Vitalite;
use Core\Caracteristique\Force;
use Core\Caracteristique\Robustesse;
use Core\Caracteristique\Precision;
use Core\Caracteristique\Dexterite;

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

$guerrier = new Guerrier();
$rodeur = new Rodeur();
$moine = new Moine();
$mage = new Mage();

$bouleDeFeu = new BouleDeFeu();
$tirTendu = new TirTendu();
$EclatDeLumiere = new EclatDeLumiere();
$frappeFeroce = new FrappeFeroce();

$commun = new RareteCommun();
$vert = new RareteVert();
$gold = new RareteGold();
$legend = new RareteLegend();

$arme = new TypeArme();
$armure = new TypeArmure();
$conso = new TypeConsommable();
$compo = new TypeCompos();

$epeeDeFeu = new EpeeDeFeu();

$EquipementArme = new EquipementArme();
$EquipementArmure = new EquipementArmure();
$EquipementBijou = new EquipementBijou();

$etete = new ETete();
$eepaule = new EEpaule();
$egant = new EGant();
$etorse = new ETorse();
$ejambe = new EJambe();
$epied = new EPied();
$emaindroite = new EMainDroite();
$emaingauche = new EMainGauche();
$eoreillegauche = new EOreilleGauche();
$eoreilledroite = new EOreilleDroite();
$ecou = new ECou();
$ebague1 = new EBague1;
$ebague2 = new EBague2;

$stuff = new Stuff();

$vitalite = new Vitalite();
$force = new Force();
$robustesse = new Robustesse();
$precision = new Precision();
$dexterite = new Dexterite();
