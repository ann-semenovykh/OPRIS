<?php

	class Kinoteatr extends Application
	{
		
		private $template;
		public function __construct()
		{
			$this->load_model('kinoteatr');
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
		
		public function index()
		{
			$this->template->set_view('kinoteatr_index');
			$this->template->render();
		}
		
		
	}