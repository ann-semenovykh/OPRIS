<?php

class Application
{
	private $uri;
	protected $model;
	
	
	public function __construct($uri)
	{
		$this->uri = $uri;
	}
	
	public function load_controller()
	{
		$file = _ROOTPATH_.'application\\controllers\\'.$this->uri['controller'].'.php';
		
		if (!file_exists($file))
		{
			echo '���� ����������� �� ������';
			die;
		}
		
		require_once($file);
		
		$class = ucfirst($this->uri['controller']);
		$controller = new $class();
		
		if (method_exists($controller,$this->uri['method']))
		{
			if (is_null($this->uri['vars']))
			{
				echo '�����';
				$controller->{$this->uri['method']}();
			}
			else
			{
				$controller->{$this->uri['method']}($this->uri['vars']);
			}
		}
		else
		{
			$controller->index();
		}
	}
	
	protected function load_model($model)
	{
		$file = _ROOTPATH_.'application\\models\\'.$model.'.php';
		
		if ( !file_exists($file))
		{
			echo '������ �� �������';
			die;
		}
		
		require_once($file);
		
		$class = $class = ucfirst($model).'_Model';
		$this->model = new $class();
	}
	
	protected function load_view($view,$data)
	{
		$file = _ROOTPATH_.'application\\views\\'.$view.'.php';
		
		if ( !file_exists($file))
		{
			echo '������������� �� �������';
			die;
		}
		
		if (is_array($data) && count($data)>0)
		{
			extract($data, EXTR_PREFIX_SAME, 'wddx');
		}
		
		require_once($file);
	}
	
	protected function load_lib($lib)
	{
		$file = _ROOTPATH_.'core/'.$lib.'.php';
		
		if ( !file_exists($file))
		{
			echo '���������� �� �������';
			die;
		}
		
		require_once($file);
		
		$class = $class = ucfirst($lib);
		return new $class();
	}
}