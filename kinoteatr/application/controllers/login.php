<?php

	class Login extends Application
	{
		
		private $template;
		public function __construct()
		{
			$this->load_model('login');
			$this->template = $this->load_lib('template');
			
			$blocks = array(
				'header' => 'header',
				'index' => 'index',
				'footer' => 'footer'
			);
			
			$data = array(
				'title' => 'Авторизация/регистрация',
			);
			$this->template->init('default',$blocks,$data);
			
		}
		
		public function index()
		{
			$this->template->set_view('login_index');
			$this->template->render($data);
		}
		
		
	}