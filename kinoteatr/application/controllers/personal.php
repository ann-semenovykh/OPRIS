<?php

	class Personal extends Application
	{
		
		private $template;
		public function __construct()
		{
			$this->load_model('personal');
			$this->template = $this->load_lib('template');
			
			$data = array(
				'title' => '‹è÷íûé êàáèíåò',
			);
			
		}
		
		public function index()
		{
			$persons = $this->model->get_info();
			$data['person'] = array_shift($persons);
			$blocks = array(
				'header' => 'header',
				'index' => 'index',
				'footer' => 'footer'
			);
			$this->template->init('default',$blocks,$data);
			$this->template->set_view('personal_index');
			$this->template->render($data);
		}
	}