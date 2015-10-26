<?php

	function startup()
	{
		global $url;
		global $route;
		
		if (isset($_GET['url']))
		{
			$url = strtolower($_GET['url']);
		}
		
		$tmp_uri = preg_split("/[\/]+/", $url, -1, PREG_SPLIT_NO_EMPTY);
		

		
		$uri['controller'] =  (!empty($tmp_uri[0]))? $tmp_uri[0] : $route['default'];
		array_shift($tmp_uri);
		$uri['method'] = (!empty($tmp_uri[0]))? $tmp_uri[0] : 'index';
		array_shift($tmp_uri);
		$uri['vars'] = $tmp_uri;
		
		$app = new Application($uri);
		$app->load_controller();
	}
	
	startup();