<?php 

namespace Engine;

class MyDebug
{
	
	protected static $bugs = array();
	
	/**
	 * @desc	Permet d'ajouter un bug dans la pile pour la transmettre à la vue
	 * @param 	string $key
	 * @param 	string $value
	 */
	public static function addBug($key, $value)
	{
		self::$bugs[$key] = $value;
	}
	
	/**
	 * @desc	Permet de récupérer un bug dans la pile des variables à transmettre à la vue
	 * @param 	string $key
	 * @return 	string
	 */
	public static function getBug($key)
	{
		if(isset(self::$bugs[$key]))
		{
			return self::$bugs[$key];
		}
	}
	
	/**
	 * @desc	Retourne toutes les bugs de la pile
	 * @return multitype:
	 */
	public static function getBugsAll()
	{
		return self::$bugs;
	}
	
	/**
	 * @desc	Permet de supprimer un bug de la pile
	 * @param 	string $key
	 */
	public static function clean($key)
	{
		if(isset(self::$bugs[$key]))
		{
			unset(self::$bugs[$key]);
		}
	}
	
	/**
	 * @desc	Permet de vider la pile
	 */
	public static function cleanAll()
	{
		self::$bugs = array();
	}
	
	/**
	 * @desc	Permet de savoir si une variables existe dans la pile
	 * @param 	string $key
	 */
	public static function exist($key)
	{
		return (isset(self::$bugs[$key]));
	}
	
	public static function display()
	{
		return json_encode(self::$bugs);
	}
	
}