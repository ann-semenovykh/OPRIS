<?php
	
	define('_BASEURL_','http://kinoteatr/');
	
	define('_ENVIRONMENT_','development');
	
	switch(_ENVIRONMENT_)
	{
		case 'development':
			//define('DBUSER','root');
			//define('DBPASS', '');
			//define('DBNAME', 'exblog');
			break;
		case 'production':
			//define('DBUSER','root');
			//define('DBPASS', '');
			//define('DBNAME', 'exblog');
			break;
		default:
			echo 'Переменная _ENVIRONMENT_ не задана';
			die;
	}