<?php 

namespace Engine;

class View
{
	protected static $var = array();
	
	/**
	 * @desc	Permet d'ajouter une variable dans la pile pour la transmettre à la vue
	 * @param 	string $key
	 * @param 	string $value
	 */
	public static function addVar($key, $value)
	{
		self::$var[$key] = $value;
	}
	
	/**
	 * @desc	Permet de récupérer une variable dans la pile des variables à transmettre à la vue
	 * @param 	string $key
	 * @return 	string
	 */
	public static function getVar($key)
	{
		if(isset(self::$var[$key]))
		{
			return self::$var[$key];
		}
	}
	
	/**
	 * @desc	Retourne toutes les variables de la pile
	 * @return multitype:
	 */
	public static function getVarAll()
	{
		return self::$var;
	}
	
	/**
	 * @desc	Permet de supprimer une variable de la pile
	 * @param 	string $key
	 */
	public static function clean($key)
	{
		if(isset(self::$var[$key]))
		{
			unset(self::$var[$key]);
		}
	}
	
	/**
	 * @desc	Permet de vider la pile
	 */
	public static function cleanAll()
	{
		self::$var = array();
	}
	
	/**
	 * @desc	Permet de savoir si une variables existe dans la pile
	 * @param 	string $key
	 */
	public static function exist($key)
	{
		return (isset(self::$var[$key]));
	}
}