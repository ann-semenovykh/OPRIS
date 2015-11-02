<?php
	
	
	define('_ENVIRONMENT_','development');
	
	switch(_ENVIRONMENT_)
	{
		case 'development':
			define('_BASEURL_','http://kinoteatr/');
			define('DBUSER','root');
			define('DBPASS', '');
			define('DBNAME', 'mov_book_sys');
			break;
		case 'production':
			//define('_BASEURL_','http://kinoteatr/');
			//define('DBUSER','root');
			//define('DBPASS', 'root');
			//define('DBNAME', 'mov_book_sys');
			break;
		default:
			echo 'Переменная _ENVIRONMENT_ не задана';
			die;
	}