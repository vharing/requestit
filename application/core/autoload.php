<?php

spl_autoload_register(function($class) 
{
	if (file_exists(APP . 'libs/' . $class . '.php'))
	{
    	include APP . 'libs/' . $class . '.php';	
	} 
	else if (file_exists(APP . 'model/' . $class . '.php'))
	{
		include APP . 'model/' . $class . '.php';
	}
});

include APP . 'libs/PHPMailerAutoload.php';	
