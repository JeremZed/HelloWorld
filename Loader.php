<?php 

use Engine\Application;

function my_autoload($class)
{
	$path = str_replace('_', '/', $class);
	$path = $path.'.class.php';	
	if(file_exists($path)){	require_once $path; }
}

spl_autoload_register('my_autoload');

// $view = 'index';
// if(isset($_GET['view']))
// {
// 	$view = htmlspecialchars($_GET['view']);
// }

// require_once dirname(__FILE__).'/Twig-1.18.1/lib/Twig/Autoloader.php';
// Twig_Autoloader::register(true);

// $loader = new Twig_Loader_Filesystem('Templates');
// $twig = new Twig_Environment($loader, array(
// 		//'cache' => '/path/to/compilation_cache',
// ));

// try {
// 	$template = $twig->loadTemplate($view.'.html');
// 	$render = $template->render(array('the' => 'variables', 'go' => 'here'));
// }
// catch (Exception $e)
// {
// 	$render = 'Fail';
// }

// echo $render;

try{
	
	$Application = new Application();
	$Application->run();
	
	$render = $Application->render();
	
}
catch(Exception $e)
{
	$render = 'Warning : ' . $e->getMessage();
}

echo $render;