<?php 

namespace Engine;

use Libs\Twig\Twig_Autoloader;

class Template
{	
	protected $view;
	protected $path_view;
	
	public function __construct()
	{
		
	}
	
	public function setView($view)
	{
		$this->view = $view;
	}
	
	public function setPathView($path)
	{
		$this->path_view = $path;
	}
	
	public function render()
	{
		require_once 'Libs/Twig/Autoloader.php';
		
		Twig_Autoloader::register(true);		
		
		$loader = new \Twig_Loader_Filesystem($this->path_view);
		$twig = new \Twig_Environment($loader, array());
		
		$template = $twig->loadTemplate($this->view.'.html');
		return $template->render(array());
		
	}
}