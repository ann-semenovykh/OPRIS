<?php

	class Movie extends Application
	{
		
		private $template;
		public function __construct()
		{
			$this->load_model('movie');
			$this->template = $this->load_lib('template');
			//�������� �������� ������
			
			$blocks = array(
				'header' => 'header',
				'index' => 'index',
				'footer' => 'footer'
			);
			
			$data = array(
				'title' => '���������',
				'page_name' => '�������',
			);
			$this->template->init('default',$blocks,$data);
			
		}

		
		public function info($vars)
		{
			$data['movie_id'] = $vars;
			$this->template->set_view('movie_info');
			$this->template->render($data);
		}
		
		
	}