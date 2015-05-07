<?php 

use Engine\Application;

function my_autoload($class)
{
	$path = str_replace('_', '/', $class);
	$path = $path.'.class.php';	
	if(file_exists($path)){	require_once $path; }
}

spl_autoload_register('my_autoload');

try{
	
	$Application = new Application();
	$Application->generateCSS(true); // true en dev, false en prod
	$Application->run();
	
	$render = $Application->render();
	
}
catch(Exception $e)
{
	$render = 'Warning : ' . $e->getMessage();
}

$data = array();
$data['RENDER'] = $render;

echo json_encode($data);
