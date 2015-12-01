<?php

	function startup()
	{
		global $url;
		global $route;
		$tmp_uri = explode("/",$_SERVER['REQUEST_URI']);

		array_shift($tmp_uri);
		$uri['controller'] =  (!empty($tmp_uri[0]))? $tmp_uri[0] : $route['default'];
		array_shift($tmp_uri);
		$uri['method'] = (!empty($tmp_uri[0]))? $tmp_uri[0] : 'index';
		array_shift($tmp_uri);
		$uri['vars'] = (!empty($tmp_uri[0]))? $tmp_uri[0] : NULL;
		
		$app = new Application($uri);
		$app->load_controller();
	}
	
	startup();